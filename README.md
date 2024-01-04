
# PHP-Tracer

simple PHP data tracking tools
## Installation

Install php-tracer with composer

```bash
composer require anwarachilles/php-tracer
```
## Usage/Examples

```php
<?php

// load vendor
require_once "vendor/autoload.php";
// load class
use AnwarAchilles\PHPTracer;

// data sample
$string = "Hello World";
$array = ["Hello", "World"];
$boolean = true;
$integer = 123;
$float = 1.23;
$object = new stdClass();

class Person {
  private $name;
  protected $age;
  public $gender;
}
$object_in_class = new Person;

// init class
$trace = new PHPTracer();
// run tracer
$trace->run([
  $string,
  $array,
  $boolean,
  $integer,
  $float,
  $object,
  $object_in_class
]);
```

## License

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
