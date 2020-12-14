<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;

  include 'vendor/autoload.php';

$bag = CertificationBagFactory::integrationWebpayNormal();

$webpay = TransbankServiceFactory::normal($bag);

$response = $webpay->getTransactionResult();

$_SESSION['responseCode']=$response->detailOutput->responseCode;
// $transaction = json_decode(file_get_contents(__DIR__  . '/../storage/webpayplus.json'), true);

if ($response->detailOutput->responseCode == 0) {
          unset($_SESSION['carrito']);
          require_once 'models/pedido.php';
          $pedido = new Pedido();
          $pedidos = $pedido->getAll();
          $ped = $pedidos->fetch_object();

          $id=$ped->id;
          $estado="preparation";
          $pedido->setId($id);
          $pedido->setEstado($estado);
          $pedido->edit();





} else {


}








// Obtenemos los datos de la transacción


// Comprueba que el pago se haya efectuado correctamente

$webpay->acknowledgeTransaction();

// Agregamos los datos del response a la transacción y lo guardamos
// file_put_contents(__DIR__  . '/../storage/webpayplus.json', json_encode($transaction));

// Redirecciona al cliente a Webpay para recibir el Voucher
echo Freshwork\Transbank\RedirectorHelper::redirectBackNormal($response->urlRedirection);


?>
