<?php 


include dirname(__FILE__).'/../src/Phois/Whois/Whois.php';

$sld = $argv[1];

if($sld==''){

    echo "empty domain not accept";exit;
}


$domain = new Phois\Whois\Whois($sld);
//$whois_answer = $domain->info();

//echo $whois_answer;
//exit;
//echo $domain->getExpired();
//echo "\r\n";
//echo $domain->getRegistrar();
//var_dump( $domain->getNS() );

$res = array(
    'expired' => $domain->getExpired(),
    'registrar' => $domain->getRegistrar(),
    'ns'=>$domain->getNS(),

);

echo json_encode($res);

exit;

