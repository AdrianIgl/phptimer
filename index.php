<?php
require_once 'vendor/autoload.php';
use ipinfo\ipinfo\IPinfo;
use Foolz\Inet\Inet;

$client = new IPinfo();
$num = new Inet();

echo "<!DOCTYPE html>
<html>

<head>
    <title>Ipv4</title>
</head>
<body>
<form  method='Post'>
<p>Escribe tu numero</p>
<input type='text' name='ip' />
<input type='submit'value='Calcular' />
</form>

</form>
</body>
</html>";
if (isset($_REQUEST['Calcular'])){


$decimal_ip = $num->ptod("127.0.0.1");
$ip = $num->dtop($decimal_ip);

print("Decimal =$decimal_ip");
print("<br>");
print("Ip=$ip");
print("<br>");



$ip_address = '213.177.221.24';
$details = $client->getDetails($ip_address);

echo "Ciudad = $details->city";
print("<br>");
echo "Pais = $details->country";
print("<br>");
echo "Nombre del Pais = $details->country_name";
print("<br>");
echo "Localizacion = $details->loc";
print("<br>");
echo "Codigo Postal = $details->postal";
print("<br>");
echo "Zona Horaria = $details->timezone";
print("<br>");
echo "Region = $details->region";
print("<br>");
echo "Latitud = $details->latitude";
print("<br>");
echo "Longitud = $details->longitude";
print("<br>");
}
?>



