<?php


/*esta fucion sirve para converti toddos los carateres como acentos en formato
uti-8 indenpedientemente de cual fuera su formato de  origen todo se convertira en 
utf-8 para que asi todos tengan el mismo formato*/
function mostrar($str)
{
    $codi = mb_detect_encoding($str, "ISO-8859-1,UTF-8");
    $str = iconv($codi, 'UTF-8', $str);
    echo $str;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Red social medica</title>
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
                            <li class="dropdown"><a href="portfolio.html">Noticias<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="portfolio.html">Nacionales</a></li>
                                    <li><a href="portfoliofour.html">internacionales</a></li>
                                    <li><a href="portfolioone.html">COVID-19</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">iniciar sesion<i class="fa fa-angle-down"></i></a>
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
                            <h1 class="title">Inicio</h1>
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
                    <?php
                    include 'php/conexion.php';
                    $public = "SELECT publicacion.titulo_public,publicacion.text_public,publicacion.link_imagen,publicacion.link_video,
                    publicacion.link_audio,publicacion.link_archivo,publicacion.fecha_public,publicacion.categoria_public,publicacion.me_gusta_pu,
                    medico.nombre_medico FROM publicacion,medico WHERE publicacion.id_medico_pu=medico.id_medico ORDER BY publicacion.me_gusta_pu DESC";
                    $public2 = $mysqli->query($public);
                    while ($res = mysqli_fetch_array($public2)) {
                        $link_imagen = $res['link_imagen'];
                        $video = $res['link_video'];
                        $audio = $res['link_audio'];
                        $fecha = $res['fecha_public'];
                        $archivo = $res['link_archivo'];

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
                                            <?php
                                            if ($video != '') {
                                                echo ('<video width="820" height="420"  controls src="' . $video . '" frameborder="0"></video>');
                                            } ?>


                                            <div class="post-overlay">
                                                <span class="uppercase"><a href="#">
                                                        <h4><?php mostrar($res['fecha_public']); ?></h4>
                                                    </a></span>
                                            </div>

                                        </div>
                                        <?php
                                        if ($audio != '') {
                                            echo ('<audio src="' . $audio . '" preload="none" controls></audio>');
                                            echo ("<h4> $fecha </h4>");
                                        } ?>

                                        <div class="post-content overflow">
                                            <h2><?php mostrar($res['titulo_public']); ?></h2>
                                            <h3 class="post-author"><a href="#">Autor: <?php mostrar($res['nombre_medico']); ?> </a></h3>
                                            <h3>Resumen</h3>
                                            <p><?php mostrar($res['text_public']); ?></p>
                                            <?php
                                            if ($archivo != '') {
                                                echo ('<h4 class="post-author"><a href="' . $archivo . '"download="red-medica">Descargar Archivo</a></h4>');
                                                echo ("<h4>Publicado el: $fecha </h4>");
                                            } ?>
                                            <a href="#" class="read-more">ver publica completa</a>
                                            <div class="post-bottom overflow">
                                                <ul class="nav navbar-nav post-nav">
                                                    <li>
                                                        <h4><a href="#"><i class="fa fa-tag"></i><?php mostrar($res['categoria_public']); ?></a></h4>
                                                    </li>
                                                    <li>
                                                        <h4><a href="#"><i class="fa fa-heart"></i><?php mostrar($res['me_gusta_pu']); ?> me gusta</a></h4>
                                                    </li>
                                                    <li>
                                                        <h4><a href="#"><i class="fa fa-comments"></i>3 comentarios</a></h4>
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
                    <div class="con">
                        <input type="checkbox" id="btn-mas">
                        <div class="redes">
                            <a href="#" class="fa fa-user-circle"></a>
                            <a href="#" class="fa fa-wheelchair"></a>
                            <a href="#" class="fa fa-heartbeat"></a>
                            <a href="form_public.php" class="fa fa-stethoscope"></a>
                        </div>
                        <div class="btn-mas">
                            <label for="btn-mas" class="fa fa-plus"></label>
                        </div>
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                            <li><a href="#">left</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">right</a></li>
                        </ul>
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


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/temad.js"></script>
</body>

</html>