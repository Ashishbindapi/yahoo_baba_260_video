<?php

namespace MyNamespace;

class MyClass
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
}

$obj = new MyClass();
echo $obj->getNamespace();

echo "<hr>";

namespace MyNamespace;

class MyClass1
{
    public function getNamespace()
    {
        return __CLASS__;
    }
}

$obj = new MyClass1();
echo $obj->getNamespace();

echo "<hr>";

trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}
class MyClass2{
    use MyTrait;
}

$obj = new MyClass2();
echo $obj->getTraitName();
?>