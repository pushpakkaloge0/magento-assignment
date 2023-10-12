<?php
namespace PushpakMods\Story9\Block;

use Magento\Framework\View\Element\Template;


class ShowText extends Template{
    public static $val;

    public static function setBlockData($message){
        self::$val = $message;
    }
    public  static  function getBlockData(){
        return self::$val;  
    }


}



?>