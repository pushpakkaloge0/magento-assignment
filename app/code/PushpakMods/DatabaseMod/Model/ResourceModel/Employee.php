<?php
namespace PushpakMods\DatabaseMod\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Employee extends AbstractDb{

    protected function _construct()
    {   
        $this->_init('employee_table','employee_id');
    }
}


?>