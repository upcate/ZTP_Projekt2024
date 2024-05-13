<?php
/**
 * AdRepositoryInterface.
 */

namespace App\Repository;

use Doctrine\ORM\QueryBuilder;

/**
 * Interface AdRepositoryInterface.
 */
interface AdRepositoryInterface
{

    /**
     * Function queryAll.
     *
     * Queries all Ads from the database.
     *
     * @return QueryBuilder
     */
    public function queryAll(): QueryBuilder;

    public function save(): void;

    public function delete(): void;

}
