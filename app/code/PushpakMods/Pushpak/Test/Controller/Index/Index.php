<?php
namespace PushpakMods\Pushpak\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use PushpakMods\Pushpak\Test\MyTestClass;

class Index extends Action
{
    protected $myTestClass;

    public function __construct(
        Context $context,
        MyTestClass $myTestClass
    ) {
        parent::__construct($context);
        $this->myTestClass = $myTestClass;
    }

    public function execute()
    {
        $this->myTestClass->displayParams();
    }
}

?>