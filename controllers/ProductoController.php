<?php

require_once 'models/producto.php';


    /**
     *
     */
    class productoController{

      public function index()
      {
        $producto=new Producto();
        $productos=$producto->getRandom(6);
        // var_dump($productos->fetch_object());


        // renderizar Vista
        require_once 'views/producto/destacados.php';

      }
      public function gestion()
      {
          Utils::isAdmin();
        $producto=new Producto();
        $productos=$producto->getall();

        require_once 'views/producto/gestion.php';
      }
      public function busqueda()
      {


          if (isset($_POST['nombre'])) {

          $nombre=$_POST['nombre'];
          $producto=new Producto();
          $producto->setNombre($nombre);
          $pro=$producto->getByName();
          require_once 'views/producto/busqueda.php';
        }










    }
      public function ver()
      {
        if (isset($_GET['id'])) {
          $edit=true;
          $id=$_GET['id'];
          $producto=new Producto();
          $producto->setId($id);
          $pro=$producto->getOne();

      }
      require_once 'views/producto/ver.php';
    }

       public function crear()
      {
        require_once 'views/producto/crear.php';
      }
      public function editar()
      {




        if (isset($_GET['id'])) {
          $edit=true;
          $id=$_GET['id'];
          $producto=new Producto();
          $producto->setId($id);
          $productos=$producto->getOne();
          if ($productos) {
            require_once 'views/producto/crear.php';
          }
          else {
              echo "algo a sucedido";
          }




          }


      }

      public function eliminar()
        {

          if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $producto=new Producto();
            $producto->setId($id);
            $eliminar=$producto->delete();
            if($eliminar){
              $_SESSION['delete']="complete";

            }
            else {
              $_SESSION['delete']="failed";


            }
          }
          else {
             echo "no entro al if";
          }
          header("Location:".base_url."producto/gestion");



        }

      public function save()
      {


        if(isset($_POST)){

              $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;
              $descripcion=isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
              $precio=isset($_POST['precio']) ? $_POST['precio'] : false;
              $stock=isset($_POST['stock']) ? $_POST['stock'] : false;
              $categoria=isset($_POST['categoria']) ? $_POST['categoria'] : false;
              // $fecha=isset($_POST['fecha']) ? $_POST['fecha'] : false;
              if ($nombre&&$descripcion&&$precio&&$stock&&$categoria) {

                  $producto=new Producto();
                  $producto->setNombre($nombre);
                  $producto->setDescripcion($descripcion);
                  $producto->setPrecio($precio);
                  $producto->setStock($stock);
                  $producto->setCategoria_id($categoria);
                  if(isset($_FILES['imagen'])){
							$file = $_FILES['imagen'];
							$filename = $file['name'];
							$mimetype = $file['type'];

							if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

								if(!is_dir('uploads/images')){
									mkdir('uploads/images', 0777, true);
								}

								$producto->setImagen($filename);
								move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
							}
						}

						if(isset($_GET['id'])){
							$id = $_GET['id'];
							$producto->setId($id);

							$save = $producto->edit();
						}else{
							$save = $producto->save();
						}

						if($save){
							$_SESSION['producto'] = "complete";
              header('Location:'.base_url.'producto/gestion');
						}else{
							$_SESSION['producto'] = "failed";
              header('Location:'.base_url.'producto/crear');

						}
					}else{
						$_SESSION['producto'] = "formato";
            header('Location:'.base_url.'producto/crear');

					}
				}else{
					$_SESSION['producto'] = "failed";
          header('Location:'.base_url.'producto/crear');

				}

			}

}










    //
    //       $save=$categoria->save();
    //       if ($save) {
    //         header("Location:".base_url."categoria/index");
    //
    //       }
    //       else {
    //
    //         require_once 'views/categoria/crear.php';
    //
    //       }
    //
    //   }
    //
    //
    // }
