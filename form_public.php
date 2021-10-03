<?php


/*esta fucion sirve para converti toddos los carateres como acentos en formato
uti-8 indenpedientemente de cual fuera su formato de  origen todo se convertira en 
utf-8 para que asi todos tengan el mismo formato*/
function mostrar ($str){
$codi= mb_detect_encoding($str,"ISO-8859-1,UTF-8");
            $str=iconv($codi,'utf-8',$str);
            echo $str;
}
?>
<!DOCTYPE html>
<html lang="es">
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

<body class="dark">
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="dark1">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="images/logo.png" alt="logo" width="100" height="100"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a  href="index.php">Inicio</a></li>
                        <li class="dropdown"><a href="#">Pediatria<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="aboutus.html">Enbarosos</a></li>
                                    <li><a href="aboutus2.html">Maltrato infantil</a></li>
                                    <li><a href="service.html">Salud infantil</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="blog.html">Cardiologia<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Ataques al corazon</a></li>
                                    <li><a href="blogtwo.html">Arritmia cardiaca</a></li>
                                    <li><a href="blogone.html">Taquicardia</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="portfolio.html">Noticias<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="portfolio.html">Nacionales</a></li>
                                    <li><a href="portfoliofour.html">internacionales</a></li>
                                    <li><a href="portfolioone.html">COVID-19</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">iniciar  sesion<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">inicio de sesion</a></li>
                                    <li><a href="crear_user.php">Registro</a></li>
                                </ul>
                            </li>                   
                    </ul>
                </div>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                    <div class="social-icons search">
                    <div class="oscuro">
                        <div class="modo" id="modo">
                            <i class="fa fa-adjust" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        </div>
    </header>
    
    <!--/#header-->
    <!--id la imagen de triangulor que se usa para el inicio-->
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div>
                        <div class="col-sm-12">
                            <h1 class="title">Publicar</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   </section>
    <!--/#action-->
    

    <section id="noticia" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Noticias</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/noticia3.jpeg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Destacan impacto del embarazo en adolescentes en la salud pública</a></h4>
                                    <p>Santo Domingo.- El impacto del embarazo adolescente a nivel psicosocial, económico, familiar,
                                        comunitario y su repercusión en la salud pública en un escenario marcado por la COVID-19.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/noticia2.jpeg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Ministro de Salud garantiza que desde DIGEMAPS se establecen los
                                            controles para el fortalecimiento de la vigilancia de sustancias controladas</a></h4>
                                    <p>Santo Domingo, R.D.-El ministro de Salud, afirmó que desde la Dirección General de
                                        Medicamentos, Alimentos y Productos Sanitarios (DIGEMAPS).</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/noticia.jpeg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Ministerio de Salud garantiza
                                            hemodiálisis a pacientes
                                            renales en los próximos seis meses</a></h4>
                                    <p>La Romana, R.D.-Este jueves el ministro de Salud, doctor Daniel
                                        Rivera participó en el inicio del XII Congreso Dominicano y XX Curso
                                        Dominico Español de Nefrología.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Especialidades</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Pediatria</a></li>
                                <li class="active"><a href="#">Cardiologia</a></li>
                                <li><a href="#">Cirugia general</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-7">
              

                    
                            <div class="col-md-12 col-sm-12">
                            
                                <div class="post-thumb">
                                <div class="panel-dafault" style="margin-top: 12px" > <!--panel de crear -->
         <div class="panel-heading">  
  	   
  	     
		   <form action="php/public.php?accion=INS" method="POST">
  	     	 	<div class="row">
                    <div class="wow fadeInDown">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-5 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Titulo<span style="color: turquoise">*</span></label>
  	     	 		 		<input type="text" name="titulo" required="required" placeholder="Titulo" class="form-control">
  	     	 		 	</div>
						 </div>
                         
                            
                         
                         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-8 col-lg-offset-3 col-xs-12 col-xs-offset-0">
                         <label class="control-label">Contenido<span style="color: turquoise">*</span></label>
						 <div class="form-group">
                                <textarea name="public" id="message" required="required" class="form-control" rows="8" placeholder="Escribe una publicacion"></textarea>
                            </div> 
                         </div>
  	     	 		 <div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-3 col-lg-offset-3 col-xs-12 col-xs-offset-0">
                         <div class="form-group">
                        <label for="" class="control-label">Categoria<span style="color:turquoise">*</span> </label>
                        <select class="form-control" name="categoria">
                            <option>Pediatria </option>
                            <option>Radiologia</option>
                            <option>Cardiologia</option>
                        </select>
                        </div>
  	     	 		 </div>
                         
                         <div class="col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                         <br>
                         <a href="index.php" class="btn btn-info">Selecionar archivo</a>
                         </div>
					
  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
                                <br>
                                <input type="submit" value="Publicar" class="btn btn-submit">
                                </form>
                                <br>
                                <br>	
                                <a href="index.php" class="btn btn-danger">Cancelar</a>
  	     	 			</div>
  	     	 		</div>
  	     	 	
  	     	
  	     </div>
         </div> 
         </div>
                                    
                
                
                        
                    
                 </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                <div class="col-sm-12">
                    <div class=" copyright-text text-center ">
                        <p>Red medica 2021. Todos los derechos reservados.</p>
                        <p>Diseñado por <a target="_blank" href="http://luis-enrique.com">Sr.LEGG</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 
    <script type="text/javascript" src="js/temad.js"></script> 
</body>
</html>
