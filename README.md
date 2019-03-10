MATH CONVERTER CSE HELPERS
=======

A mathematics helpers, providing functionality for numbers converter.

Project repository: https://github.com/cs-eliseev/helpers-math-converter

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

## Introduction

CSE HELPERS is a collection of several libraries with simple functions written in PHP for people.

Despite using PHP as the main programming language for the Internet, its functions are not enough. MATH CONVERTER CSE HELPERS providing functionality for numbers converter.

CSE HELPERS was created for the rapid development of web applications.

**CSE Helpers projec:**
* [Word CSE helpers](https://github.com/cs-eliseev/helpers-word)
* [Json CSE helpers](https://github.com/cs-eliseev/helpers-json)
* [Cookie CSE helpers](https://github.com/cs-eliseev/helpers-cookie)
* [Request CSE helpers](https://github.com/cs-eliseev/helpers-request)
* [Session CSE helpers](https://github.com/cs-eliseev/helpers-session)
* [Date CSE helpers](https://github.com/cs-eliseev/helpers-date)
* [IP CSE helpers](https://github.com/cs-eliseev/helpers-ip)
* [Email CSE helpers](https://github.com/cs-eliseev/helpers-email)
* [Phone CSE helpers](https://github.com/cs-eliseev/helpers-phone)
* [Math converter CSE helpers](https://github.com/cs-eliseev/helpers-phone)

Below you will find some information on how to init library and perform common commands.

## Install

You can find the most recent version of this project [here](https://github.com/cs-eliseev/helpers-math-converter).

### Composer

Execute the following command to get the latest version of the package:
```shell
composer require cse/helpers-math-converter
```

Or file composer.json should include the following contents:
```
{
    "require": {
        "cse/helpers-math-converter": "*"
    }
}
```

### Git

Clone this repository locally:
```shell
git clone https://github.com/cs-eliseev/helpers-math-converter.git
```

### Download

[Download the latest release here](https://github.com/cs-eliseev/helpers-math-converter/archive/master.zip).

## Usage

The class consists of static methods that are conveniently used in any project. See example [examples-math-converter.php](https://github.com/cs-eliseev/helpers-math-converter/blob/master/examples/examples-math-converter.php).

**Convert HEX TO BINARY**

Example:
```php
MathConverter::hexToBin('48454c4c4f');
// HELLO
```

**Convert BINARY TO HEX**

Example:
```php
MathConverter::binToHex('HELLO');
// 48454c4c4f
```

**Convert MEGABYTES TO BYTES**

Example:
```php
MathConverter::mbToBytes(1);
// 1048576
```

**Convert BYTES TO MEGABYTES**

Example:
```php
MathConverter::bytesToMb(1048576);
// 1
```

Change decimal:
```php
MathConverter::bytesToMb(1000000, 4);
// 0.9537
```

**Convert GIGABYTES TO BYTES**

Example:
```php
MathConverter::gbToBytes(1);
// 1073741824
```

**Convert BYTES TO GIGABYTES**

Example:
```php
MathConverter::bytesToGb(1073741824);
// 1
```

Change decimal:
```php
MathConverter::bytesToGb(1000000000, 4);
// 0.9313
```

**Convert GIGABYTES TO MEGABYTES**

Example:
```php
MathConverter::gbToMb(1);
// 1024
```

**Convert MEGABYTES TO GIGABYTES**

Example:
```php
MathConverter::mbToGb(1024);
// 1
```

Change decimal:
```php
MathConverter::mbToGb(1000, 4);
// 0.9766
```

**Convert TO MEGABYTES**

Example:
```php
MathConverter::toMb('1M');
// 1
```

Petabyte to megabyte:
```php
MathConverter::toMb('0.001P');
// 1073741.824
```

Terabyte to megabyte:
```php
MathConverter::toMb('0.1T');
// 104857.6.824
```

Gigabyte to megabyte:
```php
MathConverter::toMb('1G');
// 1024
```

Kilobyte to megabyte:
```php
MathConverter::toMb('1000K');
// 0.9765625
```

Byte to megabyte:
```php
MathConverter::toMb('1000000B');
// 0.95367431640625
```

**CUT DECIMAL**

Example:
```php
MathConverter::cutDecimal(11.726);
// 11.72
```

Change decimal:
```php
MathConverter::cutDecimal('-67.099', 1);
// -67
```

**ROUND DECIMAL**

Example:
```php
MathConverter::roundDecimal(11.726);
// 11.73
```

Change decimal:
```php
MathConverter::roundDecimal('-67.099', 0);
// -67
```


## License

See the [LICENSE.md](https://github.com/cs-eliseev/helpers-math-converter/blob/master/LICENSE.md) file for licensing details.