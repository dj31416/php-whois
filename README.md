# php-whois

PHP class to retrieve WHOIS information.

## Example of usage

```php

<?php

$sld = 'reg.ru';

$domain = new Phois\Whois\Whois($sld);

$whois_answer = $domain->info();

echo $whois_answer;

echo $domain->getExpired();

if ($domain->isAvailable()) {
    echo "Domain is available\n";
} else {
    echo "Domain is registered\n";
}

```
