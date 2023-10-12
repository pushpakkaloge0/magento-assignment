<?php

namespace PushpakMods\Price60\Plugin;

use Magento\InventoryImportExport\Model\Import\Command\Append;

class AppendHummingbirdText{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo){
        

        // echo $crumbName;

        // $crumbName[0] = "Hummingbird";
        $crumbInfo['label']='Hummingbird '.$crumbInfo['label'];

        return [$crumbName,$crumbInfo];
    }
}


?>