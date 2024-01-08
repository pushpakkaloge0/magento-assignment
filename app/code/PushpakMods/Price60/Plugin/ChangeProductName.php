<?php 
namespace PushpakMods\Price60\Plugin;

class ChangeProductName{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $result){
      
        // echo $result;
        $result = "-----| Name Not Found |-----";
        $product->setPrice(1200);
        return $result;
    }
}


?>