<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Publicar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/dark.css" rel="stylesheet">

    
    <link rel="stylesheet" href="css/estilos.css">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/ico.png">
</head><!--/head-->

<body>
    <div id="login">
        
        <div class="container">                        
            <div id="login-center" class="center justify-content-center align-items-center">
                <div id="login-column" class="col-md-8">
                
           <div class="col-4 m-auto"  user-img> 
            <img src="images/logo.png"   width="40%">
           </div>
           
                    <div id="login-box" class="col-md-12  bg-light text-dark">
                        <form action="php/usuario_registro.php?accion=INS" method="POST">
                            <h3 class="text-center text-dark">Registra Usuario</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">                                
                                <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Guardar">
                                <br>
                                <h5><a href="index.php">Login</a></h5>
                              
                               </div>
                                                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 
    <script type="text/javascript" src="js/temad.js"></script> 
    
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>
</html>