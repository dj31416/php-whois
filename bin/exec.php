<?php 


include dirname(__FILE__).'/../src/Phois/Whois/Whois.php';

$sld = $argv[1];

if($sld==''){

    echo "empty domain not accept";exit;
}


$domain = new Phois\Whois\Whois($sld);
echo $domain->getExpired();
exit;

