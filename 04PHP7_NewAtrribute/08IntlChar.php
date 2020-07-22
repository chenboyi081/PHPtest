<?php 
// PHP 7 通过 intl 扩展来支持国际化 (i18n) 和本地化 (l10n) 。此扩展仅仅是对 ICU 库的基础包装，并提供了和 ICU 库类似的方法和特性。

// PHP 7 通过新的 IntlChar 类暴露出 ICU 中的 Unicode 字符特性。这个类自身定义了许多静态方法用于操作多字符集的 unicode 字符。


printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));
?>