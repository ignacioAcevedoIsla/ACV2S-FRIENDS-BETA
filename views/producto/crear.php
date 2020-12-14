<?php  require_once 'helpers/utils.php'; ?>



<?php if(isset($edit) && isset($productos) && is_object($productos)): ?>
 <h1>Editar producto <?=$productos->nombre?></h1>
 <?php $url_action = base_url."producto/save&id=".$productos->id; ?>

<?php else: ?>
 <h1>Crear nuevo producto</h1>
 <?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>


<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'): ?>
  <div class="alert alert-danger" role="alert">
          Producto fallido, rellena todos los campos o intruce datos validos
  </div>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'formato'): ?>
  <div class="alert alert-danger" role="alert">
          Formato de imagen no valido, solo aceptamos JPG o PNG  o GIF
  </div>

<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>






	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
	<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=isset($productos) && is_object($productos) ? $productos->nombre : ''; ?>"/>

	<label for="descripcion">Descripcion</label>
  <textarea name="descripcion"><?=isset($productos) && is_object($productos) ? $productos->descripcion : ''; ?></textarea>



	<label for="precio">Precio</label>
  <input type="text" name="precio" value="<?=isset($productos) && is_object($productos) ? $productos->precio : ''; ?>"/>


	<label for="stock">Stock</label>
  <input type="number" name="stock" value="<?=isset($productos) && is_object($productos) ? $productos->stock : ''; ?>"/>

  <label for="categpria">Categoria</label>
  <select  name="categoria">

     <?php $categorias=Utils::showCategorias();?>
     <?php while ($i=$categorias->fetch_object()) :?>
        <option value="<?= $i->id ?>" <?=isset($productos) && is_object($productos) && $i->id == $productos->categoria_id ? 'selected' : ''; ?>>
            <?=$i->nombre  ?>
          </option>
      <?php endwhile; ?>

  </select>

  <label for="imagen">Imagen</label>
  <?php if(isset($productos) && is_object($productos) && !empty($productos->imagen)): ?>
    <img src="<?=base_url?>uploads/images/<?=$productos->imagen?>" class="thumb"/>
   		<?php endif; ?>
      <!-- <label for="fecha">Fecha</label>
	 <input type="date" name="fecha" min="2018-03-25" max="2025-05-25" step="2" /> -->
  <input type="file" name="imagen" />
	<input type="submit" value="Guardar" />
</form>
