<?php
// <!-- https://www.runoob.com/php/php-oop.html -->
// 1.PHP 中创建对象
class Site {
    /* 成员变量 */
    var $url;
    var $title;
    
    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }
    
    function getUrl(){
        echo $this->url . "<br>";
    }
    
    function setTitle($par){
        $this->title = $par;
    }
    
    function getTitle(){
        echo $this->title . "<br>";
    }
}

$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();


//1.1 PHP 构造函数
// function __construct( $par1, $par2 ) {
//     $this->url = $par1;
//     $this->title = $par2;
// }


//2.继承

// 子类扩展站点类别
class Child_Site extends Site {
    var $category;
    
    function setCate($par){
        $this->category = $par;
    }
    
    function getCate(){
        echo $this->category . "<br>";
    }
}

// 3.方法重写
// 如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。
// function getUrl() {
//     echo $this->url . PHP_EOL;
//     return $this->url;
// }

// function getTitle(){
//     echo $this->title . PHP_EOL;
//     return $this->title;
// }

// 4.访问控制
// public（公有）
// protected（受保护）
// private（私有）
// 4.1属性的访问控制
// 类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。

//5.接口
// 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
// 接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
// 接口中定义的所有方法都必须是公有，这是接口的特性。
// 要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。

// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();
    
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        
        return $template;
    }
}

// 6.常量
// 可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
// 常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
// 自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）。
class MyClass
{
    const constant = '常量值';
    
    function showConstant() {
        echo  self::constant . "<br>";
    }
}

echo MyClass::constant . "<br>";

$classname = "MyClass";
echo $classname::constant . "<br>"; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . "<br>"; // 自 PHP 5.3.0 起

// 7.抽象类
abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    
    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }
    
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }
    
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;

// 此外，子类方法可以包含父类抽象方法中不存在的可选参数。
// 例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则也是可以正常运行的。

//8.Static 关键字
// 声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
// 静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
// 由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
// 静态属性不可以由对象通过 -> 操作符来访问。
// 自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字 self，parent 或 static。
class Foo {
    public static $my_static = 'foo';
    
    public function staticValue() {
        return self::$my_static;
    }
}

print Foo::$my_static . "<br>";
$foo = new Foo();

print $foo->staticValue() . "<br>";

//9. Final 关键字
// PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，
// 则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。
// class BaseClass {
//     public function test() {
//         echo "BaseClass::test() called" . "<br>";
//     }
    
//     final public function moreTesting() {
//         echo "BaseClass::moreTesting() called"  . "<br>";
//     }
// }

// class ChildClass extends BaseClass {
//     public function moreTesting() {
//         echo "ChildClass::moreTesting() called"  . "<br>";
//     }
// }
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()

//10. 调用父类构造方法
class BaseClass {
    function __construct() {
        print "BaseClass 类中构造方法" . "<br>";
    }
}
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" . "<br>";
    }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();



?>

