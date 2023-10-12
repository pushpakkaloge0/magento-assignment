<?php
namespace PushpakMods\DatabaseMod\Controller\Save;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use PushpakMods\DatabaseMod\Model\EmployeeFactory;

class Index extends Action
{
    protected $employeeFactory;

    public function __construct(
        Context $context,
        EmployeeFactory $employeeFactory
    ) {
        parent::__construct($context);
        $this->employeeFactory = $employeeFactory;
    }

    public function execute()
    {
        // Retrieve form data
        $first_name = $this->getRequest()->getParam('field1');
        $last_name = $this->getRequest()->getParam('field2');
        $email = $this->getRequest()->getParam('field3');

        $postData = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email_id' => $email
        ];

        if (!empty($postData)) {
            try {
                $employeeModel = $this->employeeFactory->create();
                
                $employeeModel->setData($postData);

                $employeeModel->save();
                $this->messageManager->addSuccessMessage(__('Data saved successfully')) ;
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('An error occurred while saving data'));
            }
        } 
            // If the form data is empty or an error occurred, you can return to the form page
            return $this->_redirect('databasemod/index/datacontroller/');
        
    }
}
