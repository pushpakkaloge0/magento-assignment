<?php
namespace PushpakMods\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class BlockHello extends Template{
    
    public function printHello(){
        return "Hello World";
    }

    public function printPara(){
        return "This is a paragraph 1 <br> This is a paragraph 2";
    }
}


?>


