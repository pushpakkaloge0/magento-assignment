<?php
namespace PushpakMods\Story1\Pushpak\Test;

use PushpakMods\Story1\MyCategoryApi\Api\MyCategoryInterface;

class MyTestClass
{
    protected $myCategory;
    protected $arrayParam;
    protected $stringParam;

    public function __construct(
        MyCategoryInterface $myCategory,
        array $arrayParam=[1,2,4],
        string $stringParam="Sample string"
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