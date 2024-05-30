<?php
/**
 * AdService.
 */

namespace App\Service;

use App\Repository\AdRepository;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Class AdService.
 */
class AdService implements AdServiceInterface
{
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
     *
     * @return PaginationInterface Pagination Interface
     */
    public function getPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->adRepository->queryAll(),
            $page,
            AdRepository::ITEMS_PER_PAGE
        );
    }
}
