<?php
namespace PushpakMods\Pushpak\Test;

use PushpakMods\Mod1\MyCategoryApi\Api\MyCategoryInterface;

class MyTestClass
{
    protected $myCategory;
    protected $arrayParam;
    protected $stringParam;

    public function __construct(
        MyCategoryInterface $myCategory,
        array $arrayParam,
        string $stringParam
    ) {
        $this->myCategory = $myCategory;
        $this->arrayParam = $arrayParam;
        $this->stringParam = $stringParam;
    }

    public function displayParams()
    {
        echo "Array Param: ";
        print_r($this->arrayParam);
        echo "String Param: " . $this->stringParam;
    }
}

?>