<?php
namespace PushpakMods\HtmlBlock\Controller\Index;

use Magento\Framework\App\Action\Action as ActionAction;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class CustomController extends ActionAction{
    
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }
    
    public function  execute()
    {
        $page = $this->pageFactory->create();
        return $page;
    }   
    
}

?>