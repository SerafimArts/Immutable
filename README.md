# Immutable

<p align="center">
    <a href="https://travis-ci.org/SerafimArts/Immutable"><img src="https://travis-ci.org/SerafimArts/Immutable.svg?branch=master" alt="Build Status"></a>
    <a href="https://codeclimate.com/github/SerafimArts/Immutable/maintainability"><img src="https://api.codeclimate.com/v1/badges/b2606e4aa0d70307198d/maintainability" /></a>
    <a href="https://codeclimate.com/github/SerafimArts/Immutable/test_coverage"><img src="https://api.codeclimate.com/v1/badges/b2606e4aa0d70307198d/test_coverage" /></a>
</p>

<p align="center">
    <a href="https://packagist.org/packages/serafim/immutable"><img src="https://img.shields.io/badge/PHP-7.2+-4f5b93.svg" alt="PHP 7.1+"></a>
    <a href="https://packagist.org/packages/serafim/immutable"><img src="https://poser.pugx.org/serafim/immutable/version" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/serafim/immutable"><img src="https://poser.pugx.org/serafim/immutable/downloads" alt="Total Downloads"></a>
    <a href="https://raw.githubusercontent.com/SerafimArts/Immutable/master/LICENSE.md"><img src="https://poser.pugx.org/serafim/immutable/license" alt="License MIT"></a>
</p>

## Installation

Install via [Composer](https://getcomposer.org/):

```sh
composer require serafim/immutable
```

## Usage

To ensure immunity of objects, you just need to wrap any code of your method in 
a closure.

Mutable object example:

```php
class Example
{
    private int $value = 42;

    public function update(int $newValue): self
    {
        $this->value = $newValue;
    
        return $this;
    }
}
```

Making it immutable:

```php
class Example
{
    private int $value = 42;

    public function update(int $newValue): self
    {
        return immutable(function () {
            $this->value = $newValue;
        });
    }
}
```

That`s all!

## Features

- ☑ Full PHP 7.2, PHP 7.3, PHP 7.4 and PHP 8.0 (dev) compatibility ([proof](https://travis-ci.org/SerafimArts/Immutable))
- ☑ [PSR-4](https://www.php-fig.org/psr/psr-4/)
- ☑ [PSR-12](https://www.php-fig.org/psr/psr-12/)
- ☑ Convenient helpers that don't break code =)
- ☑ Feel the power of immutable objects!

## License

See [LICENSE](https://github.com/SerafimArts/Immutable/master/LICENSE.md)
