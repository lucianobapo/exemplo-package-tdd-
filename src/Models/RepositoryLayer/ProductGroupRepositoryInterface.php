<?php

namespace ErpNET\App\Models\RepositoryLayer;

/**
 * Interface ProductGroupRepositoryInterface
 * @package namespace App\Models\RepositoryLayer;
 */
interface ProductGroupRepositoryInterface extends BaseRepositoryInterface
{
    public function collectionProductGroups();

    public function collectionCategorias();
}
