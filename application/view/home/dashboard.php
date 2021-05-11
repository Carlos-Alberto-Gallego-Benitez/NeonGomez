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
    <link rel="stylesheet" href="<?= URL ?>public/css/dashboard/estilos.css">
    <title>inicio</title>
    <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="logo-brand" href="#"><img src="<?= URL ?>/public/img/dashboard/principal/LOGO.png" alt="logo" width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">           
            <li class="nav-item">
              <a class="nav-link" href="#catalogo" >Catalogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#nosotros" >Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" >Cotiza con nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/neonGomez/usuario/Login" id="login">Login</a>
            </li>           
          </ul>
          
        </div>
      </div>
    </nav>
    

    <section id="hero" class="">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= URL ?>/public/img/dashboard/principal/principal.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= URL ?>/public/img/dashboard/principal/principal.jpeg" class="d-block w-100" alt="...">
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
<div class="catalogo">
  
    <section id="catalogo">
      <div class="container">
      <div class="container-fluid">
        <div class="content-center">
          <h2 class="text-dark">Algunos de nuestros productos</h2>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="catalogo-content">
              <div class="catalogo-details">
                  
            </div>
                <img src="<?= URL ?>/public/img/dashboard/principal/1.png" class="img-fluid imagen" alt="catalogo-1">
              </div>
            </div>

            <div class="col-md-3">
              <div class="catalogo-content">
                <div class="catalogo-details">

                </div>
                <img src="<?= URL ?>/public/img/dashboard/principal/2.png" class="img-fluid imagen" alt="catalogo-1">
              </div>
            </div>

            <div class="col-md-3">
              <div class="catalogo-content">
                <div class="catalogo-details">

                </div>
                <img src="<?= URL ?>/public/img/dashboard/principal/3.png" class="img-fluid imagen" alt="catalogo-1">
              </div>
            </div>

            <div class="col-md-3">
              <div class="catalogo-content">
                <div class="catalogo-details">

                </div>
                <img src="<?= URL ?>/public/img/dashboard/principal/4.png" class="img-fluid imagen" alt="catalogo-1">
              </div>
            </div>                                   
        </div>


      </div>
    </div>
    </div>
  
  </section>
</div>

      
    
    <!-- *************  Nosotros  *************** -->
  
    <section id="nosotros" class="bg-light-grey nosotros">
      <div class="container">
        <div class="texto2">
          <h2 class="text-dark ">Nosotros</h2>
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="nosotros-content">
            <div class="nosotros-details">
              
            </div>
            <img src="<?= URL ?>/public/img/dashboard/principal/principal.jpeg" class=" prueba" alt="catalogo-1">
          </div>
        </div>


        <div class="row">
          
            <div class="row">
              <div class="content-center texto1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>  Voluptate sunt nemo dolor omnis adipisci eveniet quas <br> vel praesentium, et molestias facilis doloribus,  nostrum <br> fugit ab perspiciatis,  exercitationem odit atque libero!</p>
                
              </div>
            </div>
         
      </div>
     
  </section>
  
  

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/f489c8aeef.js" crossorigin="anonymous"></script>   
  </body>
</html>