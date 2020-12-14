<?php

class webpayController{

  public function index()
  {
    $stats = Utils::statsCarrito();
    $coste = $stats['total'];
    require_once 'views/webpay/index.php';
  }
  public function inicioPago()
  {

    $stats = Utils::statsCarrito();
    $coste = $stats['total'];
    require_once 'models/pedido.php';
    Utils::isIdentity();
    $usuario_id = $_SESSION['identity']->id;
    $pedido = new Pedido();

    // Sacar los pedidos del usuario
    $pedido->setUsuario_id($usuario_id);
    $pedidos = $pedido->getAllByUser();



    require_once 'views/webpay/inicioPago.php';

  }
  public function response()
  {


    $stats = Utils::statsCarrito();
    $coste = $stats['total'];

    require_once 'views/webpay/response.php';
    // unset($_SESSION['carrito']);


  }
  public function finish()
  {




    require_once 'views/webpay/finish.php';




  }

  // public function addCarrito()
  // {
  //
  //
  // }
}
