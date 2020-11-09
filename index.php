<?php
require_once 'vendor/autoload.php';

use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;

try {
    $num = new Inet();
    $client = new IPinfo();

    echo "  <!DOCTYPE>
        <html>
        <head></head>
        <body>
            <h1>IPV4</h1>
            <form action='' method='GET'>
                <p>Introducir el numero:</p>
                <p><input type='text' name='num' placeholder='Escribe el numero'></p>
                <input name='Localizar' type='submit' value='Localizar'></button>
            </form>
        </body>
        </html>";

    if (isset($_REQUEST['Localizar'])) {
        $decimal_ip = htmlspecialchars($_REQUEST['num']);
        $dir_ip = $num->dtop($decimal_ip);
        echo "<p>IP Decimal: " . $decimal_ip . "</p>";
        $details = $client->getDetails($dir_ip);
        echo "<p>IP: " . $details->ip . "</p>";
        echo "<p>Ciudad: " . $details->city . "</p>";
        echo "<p>Region: " . $details->region . "</p>";
        echo "<p>Pais: " . $details->country . "</p>";
        echo "<p>Localizacion: " . $details->loc . "</p>";
        echo "<p>CP: " . $details->postal . "</p>";
        echo "<p>ZonaHoraria: " . $details->timezone . "</p>";
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
?>