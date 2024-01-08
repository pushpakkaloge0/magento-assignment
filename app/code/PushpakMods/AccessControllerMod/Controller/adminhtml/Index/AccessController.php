<?php 
namespace PushpakMods\AccessControllerMod\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Data\Form\FormKey;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;


class AccessController extends Action{

    private $formKey;

    protected $resultPageFactory;

    public function __construct(Context $context, FormKey $formKey,PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {

        $accessParam = $this->getRequest()->getParam('access');

        $resultPage = $this->resultPageFactory->create();

        if ($accessParam == 'True') {
            $resultPage->getConfig()->getTitle()->set("Access Success");
        } else {
            $resultPage->getConfig()->getTitle()->set("Access denied");       
        }   
        return $resultPage;
    }
}


?>



<!-- pushpak.magento.com/index.php/admin/admin/accesscontrol/index/accesscontroller?access=True -->