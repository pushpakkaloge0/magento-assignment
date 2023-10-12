<?php 
namespace PushpakMods\DatabaseMod\Block;

use Magento\Framework\View\Element\Template;

class Form extends Template{
    public function getFormAction()
    {
        return $this->getUrl('databasemod/save/index');
    }
}

?>