<?php
/**
 * Ad List Controller Test.
 */

namespace App\Tests\Controller;

use App\Service\AdService;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AdListControllerTest.
 */
class AdControllerTest extends WebTestCase
{
    /**
     * Set up.
     */
    public function setUp(): void
    {
        $this->httpClient = static::createClient();
    }

    /**
     * Test Ad List Route.
     */
    public function testIndexRoute(): void
    {
        // given

        $client = $this->httpClient;

        // when

        $client->request('GET', '/ad');
        $responseCode = $client->getResponse()->getStatusCode();

        // then

        $this->assertEquals(200, $responseCode);
    }

    /**
     * Test Show Route.
     */
//    public function testShowRoute(): void
//    {
//        // given
//
//        $client = $this->httpClient;
//
//        // when
//
//
//
//        // then
//    }
}
