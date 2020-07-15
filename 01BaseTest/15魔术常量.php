<?php 
//00 PHP 魔术常量
// 不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，
//或者动态加载后，或者在编译时已经包括进去了。
// 有八个魔术常量它们的值随着它们在代码中的位置改变而改变。
namespace MyProject;
//01 __LINE__
echo '这是第 " '  . __LINE__ . ' " 行';
echo '<br>';

//02 __FILE__
// 文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
// 自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。
echo '该文件位于 " '  . __FILE__ . ' " ';
echo '<br>';

//03 __DIR__
echo '该文件位于 " '  . __DIR__ . ' " ';
echo '<br>';

//04 __FUNCTION__
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
echo '<br>';

//05 __CLASS__
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
echo '<br>';
//06 __TRAIT__
// Trait 的名字（PHP 5.4.0 新加）。
// 自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。
// Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
// 从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。
// 其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
class MyHelloWorld extends Base {
    use SayWorld;
}
$o = new MyHelloWorld();
$o->sayHello();
echo '<br>';

//07 __METHOD__
//类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
function test2() {
    echo  '函数名为：' . __METHOD__ ;
}
test();
echo '<br>';

//08 __NAMESPACE__
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"


?>