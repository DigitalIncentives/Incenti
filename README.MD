# WeGift

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.MD)
[![Total Downloads][ico-downloads]][link-downloads]

This is an unofficial Incenti SDK.

Official Documentation: https://www.incenti.me/api-documentation/

## Install

Via Composer

```bash
$ composer require alldigitalrewards/incenti
```

## Usage

```php
require __DIR__ . '/../vendor/autoload.php';

use DigitalIncentives\Incenti\IncentiSdk;

$client = new IncentiSDK('https://api.example.com/','client-id', 'client-secret');

foreach ($client->listAllProducts() as $product) {
    var_dump($product);
}
```

See examples in the [examples](/examples) folder.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email jhoughtelin@alldigitalrewards.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.MD) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/digitalincentives/incenti.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/digitalincentives/incenti
[link-downloads]: https://packagist.org/packages/digitalincentives/incenti
