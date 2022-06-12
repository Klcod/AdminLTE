<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

  <?php 
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if($pagina == 'invitados' || $pagina == 'index') {
      echo '<link rel="stylesheet" href="css/colorbox.css">';
 } else if($pagina == 'conferencia') {
      echo '<link rel="stylesheet" href="css/lightbox.css">';
 }
?>
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest" aria-hidden="true"></i></a>
          <a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
          <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix"> 
            <p class="fecha"><i class="fa fa-calendar-alt" aria-hidden="true"></i> 10-12 Dic</p>
            <p class="ciudad"><i class="fa fa-solid fa fa-location-dot" aria-hidden="true"></i> Quintana Roo, MX</p>
          </div>

          <h1 class="nombre-sitio">GdlWebCamp</h1>
          <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
        </div><!--.informacion-evento-->

      </div>
    </div><!--.hero-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
          <a href="index.php">
          <img src="img/logo.svg" alt="logo gdlwebcamp">
          </a>
        </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div> <!--.contenedor-->
  </div> <!--.barra-->