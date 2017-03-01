# Luhn-PHP [![Latest Stable Version](https://poser.pugx.org/jayin/luhn-php/v/stable.svg)](https://packagist.org/packages/jayin/luhn-php)

[Luhn algorithm](https://en.wikipedia.org/wiki/Luhn_algorithm) Luhn算法PHP实现

## 安装

```shell
composer require "jayin/luhn-php"
```

## 使用

```php
require_once("vendor/autoload.php");

echo \Jayin\Luhn::parser('7992739871x');
//=>  79927398713
```

