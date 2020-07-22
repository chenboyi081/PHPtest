<?php
// PHP 7 增加了对返回类型声明的支持，返回类型声明指明了函数返回值的类型。

// 可以声明的返回类型有：
// int
// float
// bool
// string
// interfaces
// array
// callable

// 实例中，要求返回结果为整数
declare(strict_types=1);

function returnIntValue(int $value): int
{
   return $value;
}

print(returnIntValue(5));

// void 函数
// 一个新的返回值类型void被引入。 返回值声明为 void 类型的方法要么干脆省去 return 语句，要么使用一个空的 return 语句。 对于 void 函数来说，NULL 不是一个合法的返回值。
// 返回的类型还有 void，定义返回类型为 void 的函数不能有返回值，即使返回 null 也不行。

// void 函数可以省去 return 语句，或者使用一个空的 return 语句。
function swap(&$left, &$right) : void
{
    if ($left === $right) {
        return;
    }
    
    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b);


?>