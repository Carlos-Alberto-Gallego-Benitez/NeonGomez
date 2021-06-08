<?php if($_SESSION['valor']->Rol=="Administrador"){ ?>
    <div class="container">

      <h1 class="mt-1"> <p> <font  color="Gray"> NEÓN  </font> <font  color="Silver">  GÓMEZ </font>  </p> </h1>
      <h3> <font color="Teal">Hola <?php echo($_SESSION['valor']->Nombre." ".$_SESSION['valor']->Apellido);?>, Neón Gómez  te da la bienvenida al portal de administrador</font> </h3>
      <hr>
    
    </div class="mb-5">
<?php } ?>

<?php if($_SESSION['valor']->Rol=="Empleado"){ ?>
    <div class="container">

      <h1 class="mt-3"> <p> <font  color="Gray"> NEÓN  </font> <font color="Silver">  GÓMEZ </font>  </p> </h1>
      <h3> <font color="Teal"face="">Hola <?php echo($_SESSION['valor']->Nombre." ".$_SESSION['valor']->Apellido);?>, Neón Gómez  te da la bienvenida al portal de empleados</font> </h3>
      <hr>
    
    </div class="mb-5">
<?php } ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" height=420 width=50 src="<?= URL ?>public/img/login/logo.png" >
    </div>
    
</div>