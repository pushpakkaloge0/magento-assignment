<?php
namespace PushpakMods\DatabaseMod\Model;

use Magento\Framework\Model\AbstractModel;

use PushpakMods\DatabaseMod\Model\ResourceModel\Employee as EmployeeResource;

class Employee extends AbstractModel{
    
    protected function _construct()
    {
        $this->_init(EmployeeResource::class);
    }


    public function getFName()
    {
        return $this->_getData('first_name');
    }
}


?>