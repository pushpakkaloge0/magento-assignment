<?php
namespace PushpakMods\DatabaseMod\Model;

class EmployeeFactory
{
    protected $objectManager;
    protected $instanceName;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = Employee::class)
    {
        $this->objectManager = $objectManager;
        $this->instanceName = $instanceName;
    }

    public function create(array $data = [])
    {
        return $this->objectManager->create($this->instanceName, $data);
    }
}


?>