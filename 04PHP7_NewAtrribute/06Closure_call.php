<?php 

// PHP 7 的 Closure::call() 有着更好的性能，将一个闭包函数动态绑定到一个新的对象实例并调用执行该函数。

class A {
    private $x = 1;
}

// PHP 7 之前版本定义闭包函数代码
$getXCB = function() {
    return $this->x;
};

// 闭包函数绑定到类 A 上
$getX = $getXCB->bindTo(new A, 'A');

echo $getX();
print(PHP_EOL);

// PHP 7+ 代码
$getX = function() {
    return $this->x;
};
echo $getX->call(new A);
?>