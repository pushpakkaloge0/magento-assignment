<?php 
namespace PushpakMods\Price60\Plugin;


class ChangeDescriptionText {
    protected $isVis=true;
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result){
        if($this->isVis){
            $this->isVis=false;
            return "My custom description!";
        }
    }
}


?>