<?php 
// PHP 7 改变了大多数错误的报告方式。不同于 PHP 5 的传统错误报告机制，现在大多数错误被作为 Error 异常抛出。

// 这种 Error 异常可以像普通异常一样被 try / catch 块所捕获。
// 如果没有匹配的 try / catch 块， 则调用异常处理函数（由 set_exception_handler() 注册）进行处理。
// 如果尚未注册异常处理函数，则按照传统方式处理：被报告为一个致命错误（Fatal Error）。

// Error 类并不是从 Exception 类 扩展出来的，所以用 catch (Exception $e) { ... } 这样的代码是捕获不 到 Error 的。
// 你可以用 catch (Error $e) { ... } 这样的代码，或者通过注册异常处理函数（ set_exception_handler()）来捕获 Error。

// Error 异常层次结构
// 1.Error
// ArithmeticError
// AssertionError
// DivisionByZeroError
// ParseError
// TypeError

// 2.Exception
// ...

//ps:可以查看图片：https://www.runoob.com/wp-content/uploads/2016/03/1458887252-2773-exception-hiearchy.jpg


class MathOperations
{
    protected $n = 10;
    
    // 求余数运算，除数为 0，抛出异常
    public function doOperation(): string
    {
        try {
            $value = $this->n % 0;
            return $value;
        } catch (DivisionByZeroError $e) {
            return $e->getMessage();
        }
    }
}

$mathOperationsObj = new MathOperations();
print($mathOperationsObj->doOperation());


?>