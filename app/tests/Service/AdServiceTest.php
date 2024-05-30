<?php
/**
 * Test Ad Service.
 */

namespace App\Tests\Service;

use App\Repository\AdRepository;
use App\Service\AdService;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class TestAdService.
 */
class AdServiceTest extends WebTestCase
{
    /**
     * Set up.
     */
    protected function setUp(): void
    {
        $this->adRepository = $this->createMock(AdRepository::class);
        $this->paginator = $this->createMock(PaginatorInterface::class);
        $this->adService = new AdService($this->adRepository, $this->paginator);
    }

    /**
     * Test getPaginatedList.
     */
    public function testGetPaginatedList(): void
    {
        // given
        $pagination = $this->createMock(PaginationInterface::class);

        $page = 1;
        $itemsPerPage = AdRepository::ITEMS_PER_PAGE;

        // when
        $this->paginator->expects($this->once())
            ->method('paginate')
            ->with(
                $this->adRepository->queryAll(),
                $page,
                $itemsPerPage
            )
            ->willReturn($pagination);
        $result = $this->adService->getPaginatedList($page);

        // then
        $this->assertSame($pagination, $result);
    }
}
