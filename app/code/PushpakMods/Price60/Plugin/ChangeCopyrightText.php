<?php 
namespace PushpakMods\Price60\Plugin;



class ChangeCopyrightText{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result){

        $result = "my copyright text";

        return $result;
    }
}


?>