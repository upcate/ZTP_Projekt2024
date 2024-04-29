<?php
/**
 * Ad Controller.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Class AdController.
 */
#[Route('/adlist')]
class AdController extends AbstractController
{

    #[Route(
        name: 'adlist_index',
        methods: 'GET',
    )]
    public function index(): Response
    {

        return new Response();

    }

}
