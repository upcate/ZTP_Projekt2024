<?php
/**
 * Ad List Controller Test.
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AdListControllerTest.
 */
class AdControllerTest extends WebTestCase
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
}
