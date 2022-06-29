# A super simple http response code library

This is a simple library for creating http responses in bare bones php.

## Installation

```
composer require withinboredom/response-code
```

## Usage

```php
<?php

require_once 'vendor/autoload.php';

use function Withinboredom\ResponseCode\http_response_code;
use Withinboredom\ResponseCode\HttpResponseCode;

http_response_code(HttpResponseCode::Accepted);
```

## More information

The response codes are based on [RFC 9119](https://www.rfc-editor.org/rfc/rfc9110#section-15) which took effect in
June 2022.