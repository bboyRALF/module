<?php
/**
 * Data Model implementing the Address interface
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Order\FrontController\Model\Data;

use \Magento\Framework\Model\AbstractModel;
/**
 * Class Address
 *
 */
class Front extends AbstractModel  implements \Order\FrontController\Api\Data\FrontInterface
{

    /**
     * @param \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory
     * @param AttributeValueFactory $attributeValueFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize Front resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Order\FrontController\Model\ResourceModel\Front');
    }

    /**
     * Get id
     *
     * @return int|null
     */
    public function getFrontId()
    {
        return $this->get(self::ID);
    }

    /**
     * Get region
     *
     * @return \Magento\Customer\Api\Data\RegionInterface|null
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Get region ID
     *
     * @return int
     */
    public function getEmail()
    {
        return $this->get(self::EMAIL);
    }

    /**
     * Get country id
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->get(self::MOBILE);
    }

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setFrontId($id)
    {
        return $this->setData(self::ID, $id);
    }


    /**
     * Set customer ID
     *
     * @param int $customerId
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set region
     *
     * @param \Magento\Customer\Api\Data\RegionInterface $region
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set region ID
     *
     * @param int $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        return $this->setData(self::MOBILE, $mobile);
    }
}
