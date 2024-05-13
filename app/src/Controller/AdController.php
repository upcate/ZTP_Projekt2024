<?php
/**
 * Ad Controller.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\AdService;

/**
 * Class AdController.
 */
#[Route('/ad')]
class AdController extends AbstractController
{

    /**
     * AdController constructor.
     *
     * @param AdService $adService
     */
    public function __construct(private readonly AdService $adService)
    {
    }

    /**
     * Ad index function.
     *
     * @return Response
     */
    #[Route(
        name: 'ad_index',
        methods: 'GET',
    )]
    public function index(): Response
    {

        return new Response();

    }

}
