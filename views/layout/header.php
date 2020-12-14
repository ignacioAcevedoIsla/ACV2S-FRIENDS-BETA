
  <!DOCTYPE HTML>
  <html lang="es">
  	<head>
  		<meta charset="utf-8" />
  		<title>ACV2'S FRIENDS</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
  	</head>
  	<body>
  		<div id="container">
  			<!-- CABECERA -->
  			<header id="header">
  				<div id="logo">

  					<img src="<?=base_url?>assets/img/perro.png" alt="Camiseta Logo" />
            <h1 id="nombre" >   ACV2'S  FRIENDS ©℗®™    </h1>

  					<a href="index.php">

  					</a>
  				</div>
  			</header>

  			<!-- MENU -->





        <?php $categorias = Utils::showCategorias(); ?>
    <nav id="menu">
      <ul>
        <li>
          <a href="<?=base_url?>">Inicio</a>
        </li>
        <?php while($cat = $categorias->fetch_object()): ?>
          <li>
            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
          </li>
        <?php endwhile; ?>

            <li>
  					<a href="<?=base_url?>carrito/index">
                 <svg width="1em" height="1em" viewBox="1 1 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                 </svg>
                Mi carrito</a>
  					</li>

  					<li>
  						<a href="#">Sobre Nosotros</a>
  					</li>
            <form class="form-inline" action="<?=base_url?>producto/busqueda"  method="POST">
    <input class="form-control mr-sm-2" type="search" name="nombre" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  				</ul>
  			</nav>


  			<div id="content">
