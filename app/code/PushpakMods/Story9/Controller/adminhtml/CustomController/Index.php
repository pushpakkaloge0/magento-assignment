<?php 
namespace PushpakMods\Story9\Controller\adminhtml\CustomController;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\ResultFactory;
use PushpakMods\Story9\Block\ShowText;



class Index extends Action
{
    protected $scopeConfig;
    protected $pageFactory;
    protected $myblock;
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig,PageFactory $pageFactory,ShowText $myblock)
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
        $this->pageFactory = $pageFactory;
        $this->myblock = $myblock;
    }

    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }


}


?>