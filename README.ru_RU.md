[English](https://github.com/cs-eliseev/helpers-math-converter/blob/master/README.md) | Русский

MATH CONVERTER CSE HELPERS
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/helpers-math-converter.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/helpers-math-converter)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/helpers-math-converter.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/helpers-math-converter)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/helpers-math-converter.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/helpers-math-converter/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/helpers-math-converter.svg?style=flat-square)](https://packagist.org/packages/cse/helpers-math-converter)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/helpers-math-converter)
[![Packagist](https://img.shields.io/packagist/l/cse/helpers-math-converter.svg?style=flat-square)](https://github.com/cs-eliseev/helpers-math-converter/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/helpers-math-converter.svg?style=flat-square)](https://github.com/cs-eliseev/helpers-math-converter/archive/master.zip)

Данная библиотек состоит из статических методов, которые позволят вам приобразовывать числа.

Репозиторий проекта: https://github.com/cs-eliseev/helpers-math-converter

**DEMO**
```php
$mb = MathConverter::toMb('300K');
$sub = bcsub(
    MathConverter::roundDecimal($mb, 4),    // 0.293
    MathConverter::cutDecimal($mb, 4),      // 0.2929
    4
);
// 0.0001
MathConverter::binToHex($sub);
// 302e30303031
```

***


## Описание проекта

CSE HELPERS - это набор из небольших библиотек с простыми функциями написанных на PHP специально для вас.

Несмотря на повсеместное использование PHP в качестве основного языка для WEB разработки, его зачастую недостаточно. MATH CONVERTER CSE HELPERS предоставляет функионал для преобразования чисел.

CSE HELPERS создан для быстрой разработки веб-приложений.

**Список библиотек CSE Helpers:**
* [Array CSE helpers](https://github.com/cs-eliseev/helpers-arrays)
* [Cookie CSE helpers](https://github.com/cs-eliseev/helpers-cookie)
* [Date CSE helpers](https://github.com/cs-eliseev/helpers-date)
* [Email CSE helpers](https://github.com/cs-eliseev/helpers-email)
* [IP CSE helpers](https://github.com/cs-eliseev/helpers-ip)
* [Json CSE helpers](https://github.com/cs-eliseev/helpers-json)
* [Math Converter CSE helpers](https://github.com/cs-eliseev/helpers-math-converter)
* [Phone CSE helpers](https://github.com/cs-eliseev/helpers-phone)
* [Request CSE helpers](https://github.com/cs-eliseev/helpers-request)
* [Session CSE helpers](https://github.com/cs-eliseev/helpers-session)
* [Word CSE helpers](https://github.com/cs-eliseev/helpers-word)

Ниже представлена информация об установке и перечне команд с примерами их использования.


## Установка

Самая последняя версия проекта доступна [здесь](https://github.com/cs-eliseev/helpers-math-converter).

### Composer

Чтобы установить последнюю версию проекта, выполните следующую команду в терминале:
```shell
composer require cse/helpers-math-converter
```

Или добавьте следующее содержимое в файл composer.json:
```json
{
    "require": {
        "cse/helpers-math-converter": "*"
    }
}
```

### Git

Добавить этот репозиторий локально можно следующим образом:
```shell
git clone https://github.com/cs-eliseev/helpers-math-converter.git
```

### Скачать

[Скачать последнюю версию проекта можно здесь](https://github.com/cs-eliseev/helpers-math-converter/archive/master.zip).

## Использование

Данный класс использует статические методы, которые удобно использовать в любом проекте. Смотрите пример [examples-math-converter.php](https://github.com/cs-eliseev/helpers-math-converter/blob/master/examples/examples-math-converter.php).

**Преобразовать хекс код в бинарные данные**

Пример:
```php
MathConverter::hexToBin('48454c4c4f');
// HELLO
```

**Преобразовать бинарные данные в хекс код**

Пример:
```php
MathConverter::binToHex('HELLO');
// 48454c4c4f
```

**Пробразовать мегабайты в байты**

Пример:
```php
MathConverter::mbToBytes(1);
// 1048576
```

**Преобразовать байты в мегабайты**

Пример:
```php
MathConverter::bytesToMb(1048576);
// 1
```

Изменить количество знаков после запятой:
```php
MathConverter::bytesToMb(1000000, 4);
// 0.9537
```

**Преобразовать гагабайты в байты**

Пример:
```php
MathConverter::gbToBytes(1);
// 1073741824
```

**Преобразовать байты в гагабайты**

Пример:
```php
MathConverter::bytesToGb(1073741824);
// 1
```

Изменить количество знаков после запятой:
```php
MathConverter::bytesToGb(1000000000, 4);
// 0.9313
```

**Преобразовать гагабайты в мегабайты**

Пример:
```php
MathConverter::gbToMb(1);
// 1024
```

**Преобразовать мегабайты в гагабайты**

Пример:
```php
MathConverter::mbToGb(1024);
// 1
```

Изменить количество знаков после запятой:
```php
MathConverter::mbToGb(1000, 4);
// 0.9766
```

**Преобразовать в мегабайты**

Пример:
```php
MathConverter::toMb('1M');
// 1
```

Преобразовать петабайты в мегабайты:
```php
MathConverter::toMb('0.001P');
// 1073741.824
```

Преобразовать терабайты в мегабайты:
```php
MathConverter::toMb('0.1T');
// 104857.6.824
```

Преобразовать гигабайты в мегабайты:
```php
MathConverter::toMb('1G');
// 1024
```

Преобразовать килобайты в мегабайты:
```php
MathConverter::toMb('1000K');
// 0.9765625
```

Преобразовать байты в мегабайты:
```php
MathConverter::toMb('1000000B');
// 0.95367431640625
```

**Отбрость часть оостатка**

Пример:
```php
MathConverter::cutDecimal(11.726);
// 11.72
```

Изменить количество знаков после запятой:
```php
MathConverter::cutDecimal('-67.099', 1);
// -67
```

**Округление остатка**

Пример:
```php
MathConverter::roundDecimal(11.726);
// 11.73
```

Изменить количество знаков после запятой:
```php
MathConverter::roundDecimal('-67.099', 0);
// -67
```


## Тестирование и покрытие кода

PHPUnit используется для модульного тестирования. Данные тесты гарантируют, что методы класса выполняют свою задачу.

Подробную документацию по PHPUnit можно найти по адресу: https://phpunit.de/documentation.html.

Чтобы запустить тесты выполните:
```bash
phpunit PATH/TO/PROJECT/tests/
```

Чтобы сформировать отчет о покрытии тестами кода, необходимо выполнить следующую команду:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Чтобы использовать настройки по умолчанию, достаточно выполнить:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Лицензия

MATH CONVERTER CSE HELPERS это PHP-библиотека с открытым исходным кодом распространяемая по лицензии MIT. Для получения более подробной информации, пожалуйста, ознакомьтесь с [лицензионным файлом](https://github.com/cs-eliseev/helpers-math-converter/blob/master/LICENSE.md).

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)