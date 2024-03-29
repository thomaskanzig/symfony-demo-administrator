<?php

namespace App\Repository;

use App\Entity\AclAction;
use App\Entity\AclPermission;
use App\Entity\Translation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AclPermission>
 *
 * @method AclPermission|null find($id, $lockMode = null, $lockVersion = null)
 * @method AclPermission|null findOneBy(array $criteria, array $orderBy = null)
 * @method AclPermission[]    findAll()
 * @method AclPermission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AclPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AclPermission::class);
    }

    public function save(AclPermission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AclPermission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all roles.
     *
     * @param int $userGroupId
     * @param string|null $prefix
     * @return array
     */
    public function findRoles(int $userGroupId, ?string $prefix = null): array
    {
        $qb = $this->createQueryBuilder('permission')
            ->innerJoin('permission.action', 'a')
            ->innerJoin('a.controller', 'c')
            ->innerJoin('permission.userGroup', 'g');

        $qb->select(
            'permission.id, 
                    a.name action,
                    c.name controller,
                    c.prefix prefix'
        );

        $qb->andWhere('g.id = :acl_user_group_id')
            ->setParameter('acl_user_group_id', $userGroupId);

        return $qb->getQuery()->getResult();
    }
}
