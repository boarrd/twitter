# A Twitter feed for Boarrd

[![Latest Version on Packagist](https://img.shields.io/packagist/v/boarrd/twitter.svg?style=flat-square)](https://packagist.org/packages/boarrd/twitter)
![CircleCI branch](https://img.shields.io/circleci/project/github/boarrd/twitter/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/boarrd/twitter/master.svg?style=flat-square)](https://travis-ci.org/boarrd/twitter)
[![Quality Score](https://img.shields.io/scrutinizer/g/boarrd/twitter.svg?style=flat-square)](https://scrutinizer-ci.com/g/boarrd/twitter)
[![Total Downloads](https://img.shields.io/packagist/dt/boarrd/twitter.svg?style=flat-square)](https://packagist.org/packages/boarrd/twitter)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require boarrd/twitter
```

Next up, you must register the tool with Nova. This is typically done in the `getTiles` method of the `Dashboard` class.

```php
// in app/Dashboard/Dashboard.php

// ...

public function getTiles()
{
    return [
        // ...
        new \Boarrd\Twitter(),
    ];
}
```

## Usage

Click on the "twitter" menu item in your Nova app to see the tool provided by this package.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

The original code for this package was written by Spatie for [their dashboard](https://github.com/spatie/dashboard.spatie.be).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
