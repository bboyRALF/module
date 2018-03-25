<?php
namespace Order\FrontController\Controller\Adminhtml\Index;

use Order\FrontController\Controller\Adminhtml\AbstractController;

class NewAction extends AbstractController
{
   public function execute()
    {
        $this->_forward('edit');
    }
}
