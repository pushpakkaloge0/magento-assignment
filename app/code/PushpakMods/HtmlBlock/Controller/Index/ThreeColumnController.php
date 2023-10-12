<?php 
namespace PushpakMods\HtmlBlock\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class ThreeColumnController extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        // $this->_view->loadLayout();
        // $this->_view->getLayout()->getUpdate()->addHandle('catalog_product_view');
        // $this->_view->renderLayout();

        $page = $this->resultPageFactory->create();
        $page->getConfig()->setPageLayout('1columns');
        return $page;

        
    }
}

?>