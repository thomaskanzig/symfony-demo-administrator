<?php

namespace App\Controller\Api;

use App\Entity\LocationCity;
use App\Entity\LocationState;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\Translation\TranslatorInterface;

class LocationCityController extends AbstractController
{
    /**
     * constructor.
     */
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly TokenStorageInterface $tokenStorage,
        private readonly TranslatorInterface $translator
    ) {}

    /**
     * List cities.
     */
    #[Route('/api/location/cities', name: 'api_location_city_list', methods: ['GET'])]
    public function listAction(Request $request): Response
    {
        $success = false;
        $jsonData = [];
        $message = $this->translator->trans('app.message.no_results_found');

        $stateId = $request->query->get('stateId');
        $tokenApi = $request->query->get('token');

        /** @var User $user */
        $user = $this->tokenStorage->getToken()->getUser();

        if (!$this->isCsrfTokenValid('api', $tokenApi) || !$user instanceof User) {
            throw new InvalidCsrfTokenException();
        }

        $response = new JsonResponse();

        if (empty($stateId)) {
            $response->setData([
                'success' => $success,
                'message' => $message,
            ]);

            return $response;
        }

        /** @var LocationCity[] $locationCities */
        $locationCities = $this->entityManager
            ->getRepository(LocationCity::class)
            ->listAllByState($stateId);

        if (0 < count($locationCities)){
            $success = true;
            $message = $this->translator->trans('app.message.successfully_found');

            $serializer = new Serializer();
            $jsonData = $serializer->normalize($locationCities, 'json');
        }

        $response->setData([
            'success' => $success,
            'message' => $message,
            'data' => $jsonData,
        ]);

        return $response;
    }
}