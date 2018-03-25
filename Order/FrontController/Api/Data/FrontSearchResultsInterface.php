<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Order\FrontController\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for retailer search results.
 * @api
 */
interface FrontSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get retailers list.
     *
     * @return \Order\FrontController\Api\Data\RetailerInterface[]
     */
    public function getItems();

    /**
     * Set retailers list.
     *
     * @param \Order\FrontController\Api\Data\RetailerInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}