<?php
/**
 * Copyright © 2017 Order, LLC. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Order\FrontController\Controller\Adminhtml\Index;

use Order\FrontController\Controller\Adminhtml\AbstractController;

/**
 * Admin menu index controller
 */
class Index extends AbstractController
{
    /**
     * Front grid
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()
            ->getTitle()
            ->prepend(__('Front'));

        return $resultPage;
    }
}
