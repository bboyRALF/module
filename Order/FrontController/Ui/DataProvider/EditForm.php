<?php

namespace Order\FrontController\Ui\DataProvider;

use Order\FrontController\Model\ResourceModel\Front\Collection;

/**
 * Data provider for the Front edit form.
 */
class EditForm extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;
    /**
     * EditForm constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param Collection $collection
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        Collection $collection,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collection;
        $this->_storeManager = $storeManager;
    }

    /**
     *
     * {@inheritdoc}
     *
     */
    public function getData()
    {
        $result = [];

        $items = $this->collection->getItems();
        foreach ($items as $item) {
            $data = $item->getData();
            
            $result[$item->getData('front_id')] = array(
                'front' => $data
            );
        }
        return $result;
    }
}
