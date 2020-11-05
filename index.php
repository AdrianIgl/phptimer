<?php
require_once 'vendor/autoload.php';
use ipinfo\ipinfo\IPinfo;
use Foolz\Inet\Inet;

$client = new IPinfo();
$num = new Inet();


$decimal_ip = $num->ptod("127.0.0.1");
$ip = $num->dtop($decimal_ip);

print($decimal_ip);
print("<br>");
print($ip);
print("<br>");



$ip_address = '213.177.221.24';
$details = $client->getDetails($ip_address);

echo "Ciudad = $details->city";
echo "Pais = $details->country";
echo "Ciudad = $details->city";





echo "<pre>";
var_dump($details);
echo "</pre>";
