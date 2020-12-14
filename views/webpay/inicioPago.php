
<h1>pago en accion</h1>


<?php
use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
include 'vendor/autoload.php';
$bag = \Freshwork\Transbank\CertificationBagFactory::integrationWebpayNormal();
$webpay=TransbankServiceFactory::normal($bag);

$ped = $pedidos->fetch_object();


$webpay->addTransactionDetail($coste,$ped->id);
$response = $webpay->initTransaction('http://localhost/veterinaria/webpay/response', 'http://localhost/veterinaria/webpay/finish');

echo \Freshwork\Transbank\RedirectorHelper::redirectHTML($response->url, $response->token);



?>
