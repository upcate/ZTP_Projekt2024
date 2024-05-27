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

private $paginator =

{
    /**
     * Test Ad List Route.
     */
    public function testAdRoute(): void
    {
        // given

        $client = static::createClient();

        // when

        $client->request('GET', '/ad');
        $responseCode = $client->getResponse()->getStatusCode();

        // then

        $this->assertEquals(200, $responseCode);
    }

    public function testAdPagination(): void
    {
        // given
        $tempPaginationArray = [];
        for ($i = 0; $i < 11; ++$i) {
            $tempPaginationArray[$i] = $i;
        }
        $paginator = new PaginationInterfaceImplementation();
        $paginator->paginate($tempPaginationArray, AdService::ITEMS_PER_PAGE);
        // when

        // then
    }
}
