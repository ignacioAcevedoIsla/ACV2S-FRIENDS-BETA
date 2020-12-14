<?php if(isset($save)):?>
<div class="alert alert-danger" role="alert">
        Campo vacio u/o nombre no valido, intente nuevamente
</div>

<?php endif; ?>





<form action="<?=base_url?>categoria/save" method="POST">
	<label for="nombre">Nombre</label>
	<input  class="agregarCategoria"type="text" name="nombre">



	<input type="submit" value="guardar" />
</form>
