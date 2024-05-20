<?php
/**
 * AdService.
 */

namespace App\Service;

use App\Repository\AdRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class AdService.
 */
class AdService implements AdServiceInterface
{
    /**
     * Items per page on paginated list.
     */
    private const ITEMS_PER_PAGE = 10;

    /**
     * Constructor.
     *
     * @param AdRepository       $adRepository Ad Repository
     * @param PaginatorInterface $paginator    Paginator
     */
    public function __construct(private readonly AdRepository $adRepository, private readonly PaginatorInterface $paginator)
    {
    }

    /**
     * Get Paginated List.
     *
     * @param int $page Page
     */
    public function getPaginatedList(int $page): void
    {
    }
}
