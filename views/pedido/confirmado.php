<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
	<h4 style="font-family: titilium;
	    color: green;
	" >Tu pedido se ha confirmado</h4></br>
	<?php if (isset($pedido)): ?>



	      <h4>Detalles del pedido</h4>


	    </h2>


					Número de pedido: <?= $pedido->id ?>   <br/>
					Total a pagar: $  <?= $pedido->coste ?> <br/>
					Productos:


					<table  class="table table-bordered">
						<tr>
							<th style="font-family: titilium">Imagen</th>
							<th style="font-family: titilium">Nombre</th>
							<th style="font-family: titilium">Precio</th>
							<th style="font-family: titilium">Unidades</th>
						</tr>
						<?php while ($producto = $productos->fetch_object()): ?>
							<tr>
								<td>
									<?php if ($producto->imagen != null): ?>
										<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
									<?php else: ?>
										<img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
									<?php endif; ?>
								</td>
								<td>
									<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
								</td>
								<td>
									<?= $producto->precio ?>
								</td>
								<td>
									<?= $producto->unidades ?>
								</td>
							</tr>
						<?php endwhile; ?>
					</table>




	  



















	<?php endif; ?>




	<br/>



<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Tu pedido NO ha podido procesarse</h1>
<?php endif; ?>

<h1 style="font-family: titilium">Metodos de Pago</h1>




      <p class="metodo_pago" > Transferencia Bancaria </p>
      </button>
    </h2>

      <div class="accordion-body">
				<p .class="letra">	Para realizar la compra debes depositar
					el monto solicitado en la siguiente </p>



					<strong .class="letra">Banco: </strong>Credi Chile</br>
					<strong .class="letra">Cuenta: </strong>Vista</br>
					<strong .class="letra">N de cuenta: </strong>00-020-15161-87</br>
		<br>
						En el asunto debes colocar tu numero de pedido


    <br></br>



      <p class="metodo_pago" > Pago WebPay </p>
      </button>
    </h2>



				<button id="master_pago" style=" background: transparent;

			                   /* border: transparent; */
												 box-shadow: 5px 5px 5px gray;
			                  margin-top: 20px;
												border-radius:  7px;
											 border-color: #01B1EA;
											 transition: 1000ms;

												                                                                                       "
												>

				<a href="<?=base_url?>webpay/inicioPago">	<img src="<?=base_url?>uploads/images/webpay.png" width="90px" height="60px" ><a/>
				</button>







<!-- <div class="accordion accordion-flush" id="accordionFlushExample">

<div class="accordion-item">
	<h2 class="accordion-header" id="headingTwo">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			<p class="metodo_pago" > Transferencia Bancaria </p>
		</button>
	</h2>
	<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		<div  class="accordion-body">
		<p .class="letra">	Para realizar la compra debes depositar
			el monto solicitado en la siguiente </p>



			<strong .class="letra">Banco: </strong>Credi Chile</br>
			<strong .class="letra">Cuenta: </strong>Vista</br>
			<strong .class="letra">N de cuenta: </strong>00-020-15161-87</br>
<br>
				En el asunto debes colocar tu numero de pedido






		</div>
	</div>
</div>
<div class="accordion-item">
	<h2 class="accordion-header" id="headingThree">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		<p class="metodo_pago" > Pago WebPay </p>
		</button>
	</h2>
	<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
		</div>
	</div>
</div>
</div> -->
