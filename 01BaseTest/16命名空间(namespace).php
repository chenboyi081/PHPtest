<?php 
// PHP 命名空间(namespace)是在PHP 5.3中加入
// PHP 命名空间可以解决以下两类问题：
// 1.用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
// 2.为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。

//在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。
//所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。
declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace { // 全局代码
    session_start();
    $a = MyProject\connect();
    //echo MyProject\Connection::start();
}


//子命名空间
namespace MyProject\Sub\Level       //声明分层次的单个命名空间
{
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function Connect() { /* ... */  }
};  

//命名空间使用
// PHP 命名空间中的类名可以通过三种方式引用：
// 1.非限定名称，或不包含前缀的类名称
// 2.限定名称,或包含前缀的名称，
// 3.完全限定名称，或包含了全局前缀操作符的名称，
// https://www.runoob.com/php/php-namespace.html


// 命名空间和动态语言特征

// namespace关键字和__NAMESPACE__常量

// 使用命名空间：别名/导入

// 使用命名空间：后备全局函数/常量

// 全局空间

// ***命名空间的顺序

?>