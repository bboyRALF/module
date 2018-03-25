<?php

namespace Order\FrontController\Model\ResourceModel\Front;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Order\FrontController\Model\Front', 'Order\FrontController\Model\ResourceModel\Front');
    }

}
?>