<?php
echo "hello world</br>";

class phpClass
{

    var $var1;

    var $var2 = "cboii";

    function sayhello($var2)
    {
        echo "hello " . $var2 . PHP_EOL;
    }
}
$phpC = new phpClass();
$phpC->sayhello("cboii1") ;
?>
