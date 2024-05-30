<?php
/**
 * Ad Service Interface.
 */

namespace App\Service;

use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Interface AdServiceInterface.
 */
interface AdServiceInterface
{
    /**
     * Get paginated list.
     *
     * @param int $page Page
     *
     * @return PaginationInterface Pagination Interface
     */
    public function getPaginatedList(int $page): PaginationInterface;
}
