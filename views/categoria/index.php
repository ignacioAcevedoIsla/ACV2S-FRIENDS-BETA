


<h1 id="h1cat">Categorias  </h1>

<!-- <a href="<?=base_url?>categoria/crear" class="button button-small">
	Crear categoria
</a> -->
<a href="<?=base_url?>categoria/crear"  type="button" class="btn btn-outline-primary">Crear categoria</a>

<table   class="table table-bordered">
  <tr>
    <th >ID</th>
    <th >NOMBRE</th>
  </tr>

    <?php  while($cat=$categorias->fetch_object()): ?>
          <tr>
            <td> <?=$cat->id ?></td>
            <td> <?= $cat->nombre;?> </td>
          </tr>
    <?php endwhile; ?>

</table>
