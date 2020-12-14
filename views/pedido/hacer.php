
<?php if (isset($_SESSION['identity'])): ?>
	
	<p>
		<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
	</p>
	<br/>

	<h3>Dirección para el envio:</h3>
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="comuna">Ciudad</label>
		<input type="text" name="ciudad" required />

		<label for="ciudad">Comuna</label>
		<input type="text" name="comuna" required />

		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required />

		<input type="submit" value="Confirmar pedido" />
	</form>

<?php else: ?>
	<h1>Necesitas estar identificado</h1>
	<p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif; ?>
