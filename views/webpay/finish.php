


<?php if($_SESSION['responseCode']=='0') : ?>
  <div class="alert alert-success" role="alert">
           <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?> , tu pago se a realizado con exito, gracias por preferirnos

  </div>
<?php else :?>
  <div class="alert alert-danger" role="alert">
         <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?>   , tu tarjeta fue rechazada,  inteta nuevamente
  </div>

<?php endif; ?>
