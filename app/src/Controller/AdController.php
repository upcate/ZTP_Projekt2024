<?php
/**
 * Ad Controller.
 */

namespace App\Controller;

use App\Service\AdService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpKernel\EventListener\StreamedResponseListener;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Class AdController.
 */
#[Route('/ad')]
class AdController extends AbstractController
{
    /**
     * AdController constructor.
     *
     * @param AdService $adService Ad Service
     */
    public function __construct(private readonly AdService $adService)
    {
    }

    /**
     * Ad index function.
     *
     * @param int $page Page
     *
     * @return Response Response
     */
    #[Route(
        name: 'ad_index',
        methods: 'GET',
    )]
    public function index(#[MapQueryParameter] int $page = 1): Response
    {
        // $pagination = $this->adService->getPaginatedList($page);

        return $this->render('ad/index.html.twig');
    }

    #[Route(
        name: 'ad_show',
        methods: 'GET',
    )]
    public function show(): Repsonse
    {
        return new Response();
    }
}
