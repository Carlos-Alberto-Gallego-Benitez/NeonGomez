<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link href="<?= URL ?>public/css/dashboard/estilos.css" rel="stylesheet" />
    <title>inicio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a href="#hero"><img class="logo" src="<?= URL ?>public/img/login/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">           
            <li class="nav-item">
              <a class="nav-link" href="#catalogo" >Catálogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#nosotros" >Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacto">Contáctanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>usuario/login" id="login">Login</a>
            </li>           
          </ul>
          
        </div>
      </div>
    </nav>
    

    <section id="hero" class="">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width:100%; height:750px" src="<?= URL ?>public/img/dashboard/portada1.jpg" class="d-block w-100" alt="...">
          </div>          
          <div class="carousel-item">
            <img style="width:100%; height:750px" src="<?= URL ?>public/img/dashboard/portada4.jpg" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>      
    </section>

<!-- *************  catalogo  *************** -->
<section id="catalogo">
  <div class="container espacio">
    <div class="container-fluid">
      <div class="content-center">
        <h2 class="text-dark">Algunos de nuestros productos</h2>
        </div>        
        <div class="row">
        <?php foreach ($producto as $productos) { ?>
            <div class="col-md-3">
              <div class="catalogo-content">              
                <div class="catalogo-details">                
                </div>
                  <img style="width:100%; height:250px" class="img-fluid imagen " src="data:image/jpeg;base64,<?php echo base64_encode($productos->Foto);?>"> 
                </div>                            
            </div>
            <?php } ?>                                              
        </div>        
      </div>      
    </div>    
  </div>  
  </section>

<section id="nosotros">
  <div class="container nosotros">
          <h2 class="text-dark text-center">Acerca de nosotros</h2>

          <p class="text-center">"Neón Gómez" nos dedicamos a la fabricación y venta de avisos publicitarios fabricados a base de neón y acrilico destando que los insumos oara su producción son de alta calidad brindando asi a nuestros clientes un producto de alta calidad.</p>

          


    <div class="row row-cols-1 row-cols-md-3 mt-5">
  <div class="col">
    <div class="card">
      <img
        src="<?= URL ?>public/img/dashboard/nosotros1.jpg"
        class="card-img-top"
        alt="..."
      />      
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img
        src="<?= URL ?>public/img/dashboard/nosotros2.jpg"
        class="card-img-top"
        alt="..."
      />
     
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img
        src="<?= URL ?>public/img/dashboard/nosotros3.jpg"
        class="card-img-top"
        alt="..."
      />
      
    </div>
  </div>
  
      
    </div>
  </div>
</div>
</section>





<section id="contacto">

<div class="container contacto">
  <h2 class="text-center">Contáctanos</h2>

  <div class="row"> 
  

  <div class="col-xl-6 col-md-6">
      <div class="card bg-light text-dark mb-3">
          <div class="card-body"><i class="fas fa-phone-alt"></i><h5 class="text-center ">Llámanos</h5></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
              <a>Lorem ipsum, dolor sit amet consectetur adipisicing elit.   <br>Voluptatibus animi maiores, enim</a>
              
          </div>
      </div>
  </div>

 

  <div class="col-xl-6 col-md-6">
      <div class="card bg-light text-dark mb-3">
          <div class="card-body"><i class="fas fa-envelope"></i><h5 class="text-center ">Escríbenos</h5></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
          <a>Lorem ipsum, dolor sit amet consectetur adipisicing elit.   <br>Voluptatibus animi maiores, enim</a>
              
          </div>
      </div>
  </div>

  <div class="col-xl-6 col-md-6">
      <div class="card bg-light text-dark mb-3">
          <div class="card-body"><i class="fas fa-map-marker-alt"></i><h5 class="text-center ">Escríbenos</h5></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
          <a>Lorem ipsum, dolor sit amet consectetur adipisicing elit.   <br>Voluptatibus animi maiores, enim</a>
              
          </div>
      </div>
  </div>

  <div class="col-xl-6 col-md-6 ">
      <div class="card bg-light text-dark mb-3">
          <div class="card-body"><i class="fas fa-users"></i><h5 class="text-center">Nuestras redes</h5></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
          <div class="row mb-2 content-center">
              <a><i class="fab fa-whatsapp mr-2 "></i></a> 
              <a href="https://www.instagram.com/avisosneon_medellin/?hl=es-la"> <i class="fab fa-instagram"></i></a>  
              </div>            
          </div>
      </div>
  </div>

 

  
</section>
 
 
  <div>
  <footer id="footer" class="color-footer">
  <div class="container">
  <a href="#"> <img class="logoF" src="<?= URL ?>public/img/dashboard/LOGO.png" alt="logo" ></a>
    <ul class="list-inline">
      <li class="list-inline-item footer-menu"><a href="">Inicio</a></li>
      <li class="list-inline-item footer-menu"><a href="#catalogo">Catalogo</a></li>
      <li class="list-inline-item footer-menu"><a href="#nosotros">Nosotros</a></li>
      <li class="list-inline-item footer-menu"><a href="#contacto">Contáctanos</a></li>
    </ul>  
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
      <li class="list-inline-item"><a  href="https://www.instagram.com/avisosneon_medellin/?hl=es-la"><i class="fab fa-instagram"></i></a></li>      
    </ul>  
    <div class="mb-2">
    <small class="text-light"> &copy; copyrigh - Neón Gómez <?=date('Y') ?> </p></small>
    </div>
  </div>
  </footer>
  </div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/f489c8aeef.js" crossorigin="anonymous"></script>   
  </body>
</html>