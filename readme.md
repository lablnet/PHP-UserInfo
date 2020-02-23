# PHP UserInfo
Get User information

## Requirement
1. PHP 7 (7.3 Recommanded).
2. Composer.

## Insallation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:
``` composer require lablnet/userinfo```

## Feature
 - Get user ip.
 - Get user Browser Name.
 - Get user Browser Version.
 - Get user Operating System Name.
 - Get user Operating System Version.

## Example
```php
<?php

use Lablnet\UserInfo;

require_once '../vendor/autoload.php';

$info = new UserInfo();

$osName = $info->operatingSystem();
$osVersion = $info->osVersion();
$browserName = $info->browser()['browser'];
$browserVersion = $info->browserVersion();
$ip = $info->ip();

$data = [
    'Operating System Name'    => $osName,
    'Operating System Version' => $osVersion,
    'Browser Name'             => $browserName,
    'Browser Version'          => $browserVersion,
    'Ip address'               => $ip,
];
var_dump($data);

```


## Contributions  
There is still a lot of work to do, so feel free to contribute to open `PR`  
  
## License  
MIT  
  
## Support  
Donate coffee?  
here is the bitcoin address  
[![Balance](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)

   ```37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV```  
  
Thanks you so much.

## Disclaimer
**I don't Accept any responsibility for any illegal usage**