MATH CONVERTER CSE HELPERS
=======

A mathematics helpers, providing functionality for numbers converter.

Project repository: https://github.com/cs-eliseev/helpers-math-converter

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


## License

See the [LICENSE.md](https://github.com/cs-eliseev/helpers-math-converter/blob/master/LICENSE.md) file for licensing details.