<?php
namespace Order\FrontController\Controller\Index;

class Formpost extends \Magento\Framework\App\Action\Action
{
    protected $front;

    /**
     *
     * @var \Magento\Framework\Api\DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     *
     * @var \Order\FrontController\Model\DataFrontFactory
     */
    protected $frontFactory;


    /**
     *
     * @var \Order\FrontController\Model\ResourceModel\FrontRepository
     */
    protected $frontRepository;

	public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Order\FrontController\Model\ResourceModel\FrontRepository $frontRepository,
        \Order\FrontController\Model\Front $frontModel,
        \Order\FrontController\Model\Data\FrontFactory $frontFactory,
        \Magento\Framework\Api\DataObjectHelper $dataObjectHelper
    ) {
        $this->front = $frontModel;
        $this->frontFactory = $frontFactory;
        $this->frontRepository = $frontRepository;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context);
    }

	public function execute()
	{
		$post = $this->getRequest()->getPostValue();

		if (!$post) {
            $this->_redirect('*/*/');
            return;
        }

    	/*$postObject = new \Magento\Framework\DataObject();
        $postObject->setData($post);*/

        $front = $this->frontFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $front,
            $post,
            '\Order\FrontController\Api\Data\FrontInterface'
        );

        try {
            $this->frontRepository->save($front);
            $this->messageManager->addSuccessMessage(__('You saved the Front Data'));
        } catch (\Magento\Framework\Exception\AlreadyExistsException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $this->_redirect('frontcontroller/index/index');
	}
}