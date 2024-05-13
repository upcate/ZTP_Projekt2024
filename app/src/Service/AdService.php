<?php
/**
 * AdService.
 */

namespace App\Service;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\AdServiceInterface;

/**
 * Class AdService.
 */
class AdService implements AdServiceInterface
{
    /**
     * Items per page on paginated list.
     *
     * @constant int
     */
    private const ITEMS_PER_PAGE = 10;
}