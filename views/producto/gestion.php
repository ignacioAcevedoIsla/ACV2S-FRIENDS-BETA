<h1>PRODUCTOS</h1>




<?php if(isset($_SESSION['producto'])&&$_SESSION['producto']=='complete'):?>

  <div class="alert alert-success" role="alert">
          Producto agregado satisfactoriamente
  </div>

<?php endif; ?>

<?php Utils::deleteSession('producto') ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
  <div class="alert alert-success" role="alert">
          Producto borrado correctamente
  </div>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>
  <div class="alert alert-danger" role="alert">
          Hubo un error al momento de borrar el producto
  </div>

<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>



<a href="<?=base_url?>producto/crear"  type="button" class="btn btn-outline-primary">Crear Producto</a>


<div class="desborde">


<table class="table table-bordered" >
  <tr>
    <td>Id</td>
    <td>Nombre</td>
    <!-- <td>DESCRIPCION</td> -->
    <td>Precio</td>
    <td>Stock</td>
    <!-- <td>OFERTA</td> -->
    <td>Fecha</td>
    <td>Imagen</td>
    <td>Acciones</td>




  </tr>


   <?php  while($i=$productos->fetch_object()):?>
     <tr>
       <td><?=$i->id?></td>
       <td><?=$i->nombre?></td>
       <!-- <td><?=$i->descripcion?></td> -->
       <td><?=$i->precio?></td>
       <td><?=$i->stock?></td>
       <!-- <td><?=$i->oferta?></td> -->
       <td><?=$i->fecha?></td>
       <td>

         <img   class="imgProducto"src="../uploads/images/<?=$i->imagen?>" width="60px" height="60px">

       </td>
       <td>
         <button id="edit-button" >
           <a  href="<?=base_url?>producto/editar&id=<?=$i->id?>">
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
             </svg>
           </a>
        </button>
         <button id="delete-button" >
           <a href="<?=base_url?>producto/eliminar&id=<?=$i->id?>">
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
               <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
             </svg>
           </a>
         </button>
       </td>




     </tr>
   <?php endwhile; ?>
</table>
</div>
