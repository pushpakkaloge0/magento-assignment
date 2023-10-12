<?php 
namespace PushpakMods\DatabaseMod\Block;

use Magento\Framework\View\Element\Template;
use PushpakMods\DatabaseMod\Model\EmployeeFactory;

class Table extends Template{
    protected $employeeFactory;

    public function __construct(
        Template\Context $context,
        EmployeeFactory $employeeFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->employeeFactory = $employeeFactory;
    }

    public function getEmployeeData()
    {
        $employeeModel = $this->employeeFactory->create();
        $employeeCollection = $employeeModel->getCollection();
        return $employeeCollection;
    }
}

?>