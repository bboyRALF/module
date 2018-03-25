<?php

namespace Order\FrontController\Ui\Component\Listing\Column;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Registry;

class Front implements OptionSourceInterface
{
    /**
     * @var Registry
     */
    protected $coreRegistry;


    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->coreRegistry = $registry;
    }
}
