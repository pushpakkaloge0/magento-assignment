<?php 

namespace PushpakMods\Price60\Plugin;

class ChangeWelcomeText{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result){
        // if($subject->getNameInLayout()=='')
   
        $result = 'My welcome message';
        
        return $result;
    }
}

?>