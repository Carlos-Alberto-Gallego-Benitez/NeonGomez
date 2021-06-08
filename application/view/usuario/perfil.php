<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfil</title>
        <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo URL; ?>plugins/jqueryvalidator/jquery.validate.min.js"></script> 
        <script type="text/javascript" src="<?php echo URL; ?>plugins/jqueryvalidator/localization/messages_es.min.js"></script> 
        <script src="<?php echo URL;?>public/js/validaciones/validaciones.js"></script>  
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= URL ?>public/css/perfil/styles.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#perfil">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img width="1000" class="img-fluid img-profile rounded-circle mx-auto mb-2" 
                
                <?php session_start(); if($_SESSION['valor']->Foto!=null){ ?>
                
                    height="456" src="data:image/jpeg;base64,<?php  echo base64_encode($_SESSION['valor']->Foto);?>"

                <?php } ?> 
                
                <?php if($_SESSION['valor']->Foto==null){?>

                    height="456" src="<?= URL ?>public/img/perfil/nulo.jpg"
                
                <?php } ?>
                <?php if($_SESSION['valor'] != null) {

     }
     else{
        header('location: ' . URL . 'usuario/login');
     }
     
     ?>
                /> </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Yo</a></li>
                    
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">MI contraseña</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#perfil">Perfil</a></li> 
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Mis datos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://localhost/neonGomez/Usuario/salir">Salir</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2 class="mb-0 text-center">
                        <?php echo($_SESSION['valor']->Nombre);?>
                        <span class=""> <?php echo($_SESSION['valor']->Apellido);?> </span>
                    </h2>
                    <div class="subheading mb-5 text-center mt-4">
                    <?php  echo($_SESSION['valor']->Documento);?> CC -- Rol de, <?php  echo($_SESSION['valor']->Rol);?> --Tel: (+57) <?php  echo($_SESSION['valor']->Telefono);?> --
                        <a class="text-dark" href="<?php $_SESSION['valor']->Correo;?>"><?php  echo($_SESSION['valor']->Correo);?></a>
                    </div>
                    <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->

            
            <section class="resume-section" id="education">
               
               

                <div class="resume-section-content">
                    <h3 class="mb-5 text-center">contraseña</h3>

                    <div class="form-row mb-3">
                        

                       <div class="form-group col-md-5 ml-5  text-center">
                          <label for="Contraseña">Contraseña actual</label>
                          <input type="password" disabled class="form-control" value="<?php echo($_SESSION['valor']->Contrasena);?>"  name="contra">
                        </div>

                    </div>

                    <form action="<?php echo URL?>usuario/cambiodeClave" id="formContra" method="POST">
                    <input type="hidden"  class="form-control" value="<?php echo($_SESSION['valor']->IDUsuario);?>"  name="id">
                    
                    <div class="form-row">

                        <div class="form-group ml-5 col-md-5 text-center ">
                          <label for="Contraseña">Nueva contraseña</label>
                          <input type="password" id="contrasena1" class="form-control"  name="contra1">
                          <font color="Red" id="p1"></font>
                        </div>  
                         

                        <div class="form-group col-md-5 text-center ml-4">
                          <label for="Contraseña">Confirme la contraseña</label>
                          <input type="password" id="contrasena2"  class="form-control"  name="contra2">
                          <font color="Red" id="p2"></font>
                        </div> 
                     
                    </div>
                    <input type="submit" name="agregarusuario" class="btn btn-info text-center mt-4 ml-5" value="Actualizar"/>  
                    
                    <font color="Red"  class="ml-5" id="no"></font>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                    <script>
                    $(document).ready(function(){

                    var form = $("#formContra");


                        form.submit(function(){

                        var contra1 = ($("#contrasena1").val());
                        var contra2  = ($("#contrasena2").val());

                        var falsa="";
                        var mensaje="";

                
                        if (contra2=="" ) {
                           falsa=false;

                           $("#p2").text("Este campo es requerido");
                           $("#contrasena2").focus();
    
                        }

                        if (contra1=="") {
                           falsa=false;

                           $("#p1").text("Este campo es requerido");
                           $("#contrasena1").focus();
                    
                        }

                        if (contra2!="") {

                            if (contra2.length<=7 ) {
                               falsa=false;
                                $("#p2").text("Este campo requiere 8 caracteres");
                                $("#contrasena2").focus();
                            }
                    
                        }
                        if (contra2!="") {

                            if (contra2.length>7 ) {
                               
                                $("#p2").text("");
                                
                            }
                    
                        }
                        if (contra1!="") {

                            if (contra1.length>7 ) {
                               
                                $("#p1").text("");
                                
                            }
                    
                        }
                         
                        if (contra1!="") {

                            if (contra1.length <=7 ){
                                falsa=false;
                                $("#p1").text("Este campo requiere 8 caracteres");
                                $("#contrasena1").focus();
                   
                            }
                    
                        }
                        if (contra1 != " " && contra2 != "") {

                            if (contra2.length>7 && contra1.length>7 ) {

                                if (contra1 != contra2) {
                                    falsa=false;
                                    $("#no").text("las contraseñas ingresadas no coinciden");
                                    $("#p2").text("");
                                    $("#p1").text("");
                                    
                                    
                                }
                                
                            }
                            
                        }
                
                
                        return falsa ;

                    });


                   });

                    </script>
                    </form>


                </div>
               
            </section>
            
            
            <hr class="m-0" />
        
            
            <section class="resume-section" id="perfil">
 
               
               <div class="resume-section-content">
                    <h3 class="mb-5 text-center">Actualiza tu foto de perfil</h3>
                   <h4> </h4>

                   <form action="<?php echo URL ?>usuario/agregarFoto" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo htmlspecialchars($_SESSION['valor']->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" />

                    <div class="form-row mt-5">
       
       
                        <div class="form-group col-md-4" >
                           
                           <input type="hidden">
       
                        </div>
                        <div class="form-group col-md-4" >
                        <span class="d-none d-lg-block"><img 
                        
                        <?php if($_SESSION['valor']->Foto!=null){?>

                            width="1000" height="456" class="img-fluid img-profile rounded-circle mx-auto mb-2" src="data:image/jpeg;base64,<?php  echo base64_encode($_SESSION['valor']->Foto);?>"

                        <?php } ?>  
                        <?php if($_SESSION['valor']->Foto==null) {?>

                            width="260" height="456" class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= URL ?>public/img/perfil/nulo.jpg"
                        
                        <?php } ?>
                        
                         />
                         </span>
                        <label for="contra">Agrega una nueva foto de perfil </label>
                           <input type="file" vlaue="" class="form-control"  name="foto">
                           
                        </div>
                       
                        <div class="form-group col-md-4">
       
                            
                            <input type="hidden">
       
                        </div>
                    </div>
                    <input type="submit" name="agregarfoto" class="btn btn-info text-center mt-4" value="Guardar Cambios"/><p>Al hacer click, no se le olvide seleccionar su foto menor a 1.257 kb</p>
                    </form>
               </div>

            </section>

            <!-- Interests-->
            <hr class="m-0" />

            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h3 class="mb-5 text-center">su información personal</h3>

                    <div class="form-row text-center">

                        <div class="form-group col-md-4">
                          <label for="Contraseña">Nombre</label>
                          <input disabled type="text" value="<?php echo($_SESSION['valor']->Nombre);?>" class=" text-center form-control" >
                       </div>  
 

                       <div class="form-group col-md-4">
                           <label for="Contraseña">Apellido</label>
                          <input disabled type="text" value="<?php echo($_SESSION['valor']->Apellido);?>" class=" text-center form-control"  >
                       </div> 

                       <div class="form-group col-md-4">
                           <label for="Contraseña">Correo</label>
                          <input disabled type="text" value="<?php echo($_SESSION['valor']->Correo);?>"  class=" text-center form-control"  >
                       </div> 


                    </div>
                    <br>
                    <br>

                    <div class="form-row text-center">

                        <div class="form-group col-md-4">
                           <label for="Contraseña">Telefono</label>
                           <input disabled type="text" value="<?php echo($_SESSION['valor']->Telefono);?>" class="text-center form-control"  >
                        </div>  

                        
                        <div class="form-group col-md-4">
                           <label for="Contraseña">Rol</label>
                           <input disabled type="text" value="<?php echo($_SESSION['valor']->Rol);?>" class="text-center form-control"  >
                        </div> 

                        <div class="form-group col-md-4">
                           <label for="Contraseña">Estado</label>
                           <?php if($_SESSION['valor']->Estado=="Inactivo"){?>

                            <input disabled type="text" value="<?php echo($_SESSION['valor']->Estado);?>" class="text-danger text-center form-control"  >

                           <?php }?>
                           <?php if($_SESSION['valor']->Estado=="Activo"){?>

                           <input disabled type="text" value="<?php echo($_SESSION['valor']->Estado);?>" class="text-success text-center form-control"  >

                           <?php }?>
                        </div> 


                    </div>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= URL ?>public/js/perfil/scripts.js"></script>
    </body>
</html>
