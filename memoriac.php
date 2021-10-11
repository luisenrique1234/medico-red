<?php


/*esta fucion sirve para converti toddos los carateres como acentos en formato
uti-8 indenpedientemente de cual fuera su formato de  origen todo se convertira en 
utf-8 para que asi todos tengan el mismo formato*/
function mostrar($str)
{
    $codi = mb_detect_encoding($str, "ISO-8859-1,UTF-8");
    $str = iconv($codi, 'ISO-8859-1', $str);
    echo $str;
}
$id=$_GET['id'];

session_start();
if ($_SESSION["s_medico"] === null){
	header("Location: ./login.php");
}else{
    if($_SESSION["s_idRol2"]==3){
        header("Location: ./vistas/pag_error.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Memorias del congreso</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/dark.css" rel="stylesheet">

    <link rel="stylesheet" href="css/boton.css">
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/ico.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/ico.png">
</head>
<!--/head-->

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
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
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
                            <li class="active"><a href="index.php">Inicio</a></li>
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
                            <li class="dropdown"><a href="#">Cirugia general<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Anestecia</a></li>
                                    <li><a href="#">Anestecia Local</a></li>
                                </ul>
                            </li>
                            <li>

                                <!-- <div >
                            <img src="images/predeterminado.jpg" width="100%" height="60">
                            </div>-->
                                <a href="portfolio.html" class="btn btn-info"><?php  echo $_SESSION["s_medico"];?>. .<i
                                        class="fa fa-user"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="crear_user.php">Registro</a></li>
                                    <li><a href="bd/logout.php" onclick="return alertaactivar();">Cerrar sesion</a></li>
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



    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <?php
                    include 'php/conexion.php';
                    $public = "SELECT publicacion.titulo_public,publicacion.text_public,publicacion.link_imagen,publicacion.link_video,
                    publicacion.link_audio,publicacion.link_archivo,publicacion.fecha_public,publicacion.categoria_public,publicacion.me_gusta_pu,
                    medico.nombre_medico,medico.apellido_medico FROM publicacion,medico WHERE publicacion.id_public=$id AND publicacion.id_medico_pu=medico.id_medico";
                    $public2 = $mysqli->query($public);
                    for ($i = 1; $i <= 1; $i++) {
                        $res = mysqli_fetch_array($public2);
                        $link_imagen = $res['link_imagen'];
                        $video = $res['link_video'];
                        $audio = $res['link_audio'];
                        $fecha = $res['fecha_public'];
                        $archivo = $res['link_archivo'];
                        $nombre = $res['nombre_medico'];
                        $apellido = $res['apellido_medico'];
                    ?>
                                    <!--animacion js wow fadeInDowm de las publicaciones-->
                                    <div class="wow fadeInDown">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="single-blog two-column">
                                                    <div class="post-thumb">
                                                        <?php
                                            if ($link_imagen != '') {
                                                echo ('<a href="blogdetails.html"><img src="' . $link_imagen . '" class="img-responsive" alt="">');
                                            } ?></a>
                                                        <div class="post-overlay">
                                                            <span class="uppercase"><a href="#">
                                                                    <h4><?php mostrar($res['fecha_public']); ?></h4>
                                                                </a></span>
                                                        </div>
                                                    </div>
                                                    <div class="post-content overflow">
                                                        <h2><?php mostrar($res['titulo_public']); ?></h2>
                                                        <?php echo '<h3 class="post-author"><a href="#">Autor:' . $nombre . " " . $apellido . '</a></h3>' ?>
                                                        <h3>Resumen</h3>
                                                        <p><?php mostrar($res['text_public']); ?></p>
                                                        <?php echo ("<h5>Publicado el: $fecha </h5>"); ?>
                                                        <a href="memoriac.php" class="read-more">ver publica
                                                            completa</a>
                                                        <br>
                                                        <br>
                                                        <?php
                                                            if ($archivo != '') {
                                                                echo ('<h4 class="post-author"><a href="php/' . $archivo . '"download="sistema-difucion-medica">Descargar Archivo</a></h4>');
                                                            }elseif ($video !=''){
                                                            echo ('<h4 class="post-author"><a href="php/' . $video . '"download="sistema-difucion-medica">Descargar Archivo</a></h4>');
                                                            }elseif ($audio !=''){
                                                            echo ('<h4 class="post-author"><a href="php/' . $audio . '"download="sistema-difucion-medica">Descargar Archivo</a></h4>');
                                                            }?>
                                                        <div class="post-bottom overflow">
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li>
                                                                    <h4><a href="#"><i
                                                                                class="fa fa-tag"></i><?php mostrar($res['categoria_public']); ?></a>
                                                                    </h4>
                                                                </li>
                                                                <li>
                                                                    <h4><a href="#"><i
                                                                                class="fa fa-download"></i>Descargas
                                                                            <?php mostrar($res['me_gusta_pu']); ?></a>
                                                                    </h4>
                                                                </li>
                                                                <li>
                                                                    <h4><a href="#"><i class="fa fa-comments"></i>3
                                                                            comentarios</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                    }
                    ?>
                                    <h2 class="bold">Comentarios</h2>
                                    <?php 
                                    include 'php/conexion.php';
                                    $comen ="SELECT comentario.text_comen,medico.nombre_medico,medico.apellido_medico FROM medico,publicacion,comentario WHERE comentario.id_public_com=publicacion.id_public 
                                    AND comentario.id_medico_com=medico.id_medico  AND comentario.id_public_com=$id";

                                    $comen2 = $mysqli->query($comen);
                                    while ($resco = mysqli_fetch_array($comen2)) {
                                        $nombre2 = $resco['nombre_medico'];
                                        $apellido2 = $resco['apellido_medico'];

                                    
                                    ?>
                                    <div class="response-area">

                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/blogdetails/2.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <?php echo '<h5 class="post-author"><a href="#">Comentario de: ' . $nombre2 . " " . $apellido2 . '</a></h5>' ?>
                                                        <p><?php mostrar($resco['text_comen']);?></p>
                                                        <ul class="nav navbar-nav post-nav">
                                                            <li><a href="#"><i class="fa fa-clock-o"></i>February
                                                                    11,2014</a></li>
                                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <?php
                                        }
                                        ?>
                                    <!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
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
                            <p> Red medica 2021. Todos los derechos reservados.</p>
                            <p>Diseñado por<a target="_blank" href="http://luis-enrique.com">Sr.LEGG</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!--/#footer-->

    <!--codigo del mesange cierre de sesion-->
    <script>
    function alertaactivar() {
        var respuesta = confirm("Estas seguro de Cerrar Sesion");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!--LUgar donde esta el ativador del modo oscuro -->
    <script type="text/javascript" src="js/temad.js"></script>
</body>

</html>