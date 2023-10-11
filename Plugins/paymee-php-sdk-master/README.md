# PayMee Brasil PHP SDK 
## Installation and Usage
#### Install composer dependencies
```bash
composer require paymeebrasil/paymee-php-sdk
```


#### Use the corresponding classes
```php
use PayMee\Enums\CheckoutType;
use PayMee\Helpers\PayMeeCheckout;
use PayMee\Model\Shopper;
```

#### Instantiate the Shopper class with custom values
```php
$shopper = new Shopper();
$shopper
        ->withEmail('foo@bar.com')
        ->withPhone('(31)99938-0586')
        ->withFullName('Foo bar')
        ->withCpf('015.680.186-81')
        ->withBranch('XXXX')
        ->withAccount('XXXXXXX-X');
```
#### Instantiate the PayMeeCheckout class with config values
```php
$paymeeCheckout = new PayMeeCheckout(X_API_KEY, X_API_TOKEN, IS_SANDBOX);
```
```php
$response = $paymeeCheckout
            ->withCurrency('BRL')
            ->withAmount(100.00)
            ->withReferenceCode('XXXXXX')
            ->withMaxAge(1880)
            ->withPaymentMethod("BB_TRANSFER")
            ->withCallbackURL('http://foo.callback')
            ->withShopper($shopper)
            ->create(CheckoutType::SEMI_TRANSPARENT, true);
```

Current version: 0.0.1-snapshot

For more informations, please access: https://www.paymee.com.br
