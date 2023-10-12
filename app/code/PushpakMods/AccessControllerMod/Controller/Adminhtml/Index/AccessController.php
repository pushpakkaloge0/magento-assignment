<?php 
namespace PushpakMods\AccessControllerMod\Controller\Adminhtml\Access;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class AccessController extends Action{

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {

        echo "Euuuuuuuuuuuuuu";
        // $accessParam = $this->getRequest()->getParam('access');

        // if($accessParam=='True'){
        //     $prodId=2;
        //     $prodUrl = $this->_url->getUrl('catalog/product/view',['id'=>$prodId]);
        //     $resultData = $this->resultRedirectFactory->create();
        //     return $resultData->setUrl($prodUrl);
        // }else{
        //     $this->messageManager->addErrorMessage("Access denied.");
        //     $resultData = $this->resultRedirectFactory->create();
        //     return $resultData->setPath('*/*/');
        // }
    }
}


?>