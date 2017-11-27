<?php

include dirname(__FILE__).'/../src/Phois/Whois/Whois.php';

$sld = 'bmw-318.com';

$domain = new Phois\Whois\Whois($sld);

$whois_answer = $domain->info();

//echo $whois_answer;

echo $domain->getExpired();

if ($domain->isAvailable()) {
    echo "Domain is available\n";
} else {
    echo "Domain is registered\n";
}
