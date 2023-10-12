<?php 
namespace PushpakMods\DatabaseMod\Model\ResourceModel\Employee;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PushpakMods\DatabaseMod\Model\Employee;
use PushpakMods\DatabaseMod\Model\ResourceModel\Employee as EmployeeResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResource::class);
    }
}

?>