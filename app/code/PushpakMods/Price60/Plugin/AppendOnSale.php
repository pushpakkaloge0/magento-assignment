<?php
namespace PushpakMods\Price60\Plugin;

class AppendOnSale
{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $result)
    {
        // function getPrice(\Magento\Catalog\Model\Product $pro,$res){
        //         echo "----> ".$res;
        //         return;
        // }

        echo "---------------> ".$product->getPrice();
        // echo "\n".$product->getName();

        if ($product->getPrice() < 60) {
            
            $result .= ' On Sale!';
        }

        return $result;
    }
}
