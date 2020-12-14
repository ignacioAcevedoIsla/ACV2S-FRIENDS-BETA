

<?php if(isset($producto)):?>

  <?php while($productos= $pro->fetch_object()): ?>


        <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          	<img id="buscado" style="width: 150px;
                          height: 150px;
                          margin-left: 22px;
                          margin-top: 22px;
                          border-radius: 6px;
                           box-shadow: 4px 4px 5px gray;



                          " src="<?=base_url?>uploads/images/<?=$productos->imagen?>" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title" style="font-family:titilium;"> <?=$productos->nombre?>  </h5>
            <p class="card-text" style="font-family:titilium;">$ <?=$productos->precio?> CLP</p>
            <p class="card-text" style="font-family:titilium;"><small class="text-muted"><?=$productos->precio?></small></p>
            <a href="<?=base_url?>carrito/add&id=<?=$productos->id?>" class="btn btn-primary" style="color:white">Comprar</a>
          </div>
        </div>
      </div>
    </div>






 <?php endwhile; ?>
<?php endif; ?>

<?php if ($pro->num_rows == 0): ?>
  <h1>No hay productos para mostrar</h1>
  <img id="buscado" style="width: 300px;

                height: 300px;
                margin-left: 320px;
                margin-top: 30px;
                border-radius: 6px;
                 /* box-shadow: 4px 4px 5px gray; */



                " src="<?=base_url?>uploads/images/triste3.jpg" />
<?php endif; ?>
