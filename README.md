[![PHP Client for Rahona API](https://github.com/Rahona-Hosting/php-rahona/blob/master/img/header.png)](https://packagist.org/packages/)

Use the Rahona API with your PHP scripts in a simplified way with our official library.

[![Discord Chat](https://img.shields.io/discord/642313281205436437?color=blue&label=discord)](https://discord.rahona.network)



Quickstart
----------

To download this library and integrate it inside your PHP script, you can use [Composer](https://getcomposer.org).

Quick integration with the following command:

    composer require rahona/php-rahona


How to use Rahona API
---------------------
Insert the autoload of composer then this code below.
```php
<?php
/**
 * Visit https://panel.rahona-hosting.com
 * to get your API key
 */
require __DIR__ . '/vendor/autoload.php';

use Rahona\Api;

$rahona = new Api( $rahona_key,
                   $rahona_email );
print_r($rahona->get('/me')); // return an array of your personal information
?>
```

How to print API error details?
-------------------------------

Under the hood, ```php-rahona``` uses [GuzzlePHP 6](http://docs.guzzlephp.org/en/latest/quickstart.html) by default to issue API requests. If everything goes well, it will return the response directly as shown in the examples above. If there is an error like a missing endpoint or object (404), an authentication or authorization error (401 or 403) or a parameter error, the Guzzle will raise a ``GuzzleHttp\Exception\ClientException`` exception. For server-side errors (5xx), it will raise a ``GuzzleHttp\Exception\ServerException`` exception.

You can get the error details with a code like:

```php
<?php
/**
 * Visit https://panel.rahona-hosting.com
 * to get your API key
 */
require __DIR__ . '/vendor/autoload.php';

use Rahona\Api;

$rahona = new Api($rahona_key, $rahona_email);

try {
    $rahona->get('/me');
} catch (GuzzleHttp\Exception\ClientException $e) {
    $response = $e->getResponse();
    $responseBodyAsString = $response->getBody()->getContents();
    echo $responseBodyAsString;
}
?>
```

[Visit : docs.rahona-hosting.com](https://docs.rahona-hosting.com/)
-