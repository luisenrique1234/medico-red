<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../codigo.js"></script>
</head>

<?php
include 'conexion.php';
$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

/* En esta parte se registra lo nuevos medicos que 
     desen usar la plataforma y es coresponde al archivo public.php */

if ($i == "INS") {

    /*Esta es la parte encargada de subir los arichivo a una carperta de terminada 
    donde despues los tors medicos podran descargarla*/
    $file_name = $_FILES['archivo']['name'];

    $new_name_file = null;
    $new_imgen= null;
    $new_video=null;
    $new_audio=null;
    $new_archivo=null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['archivo']['name'];
        list($type, $extension) = explode('.', $file_type);
        if ($extension == 'pdf') {
            $dir = 'documento-pdf/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['archivo']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                $new_archivo=$new_name_file;
            }
        }elseif ($extension == 'docx') {
            $dir = 'documento-word/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['archivo']['tmp_name'];
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                $new_archivo=$new_name_file;
                //echo ("<h4>$new_name_file</h4>");

            }
        }elseif ($extension == 'mp4') {
            $dir = 'videos/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['archivo']['tmp_name'];
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                $new_video=$new_name_file;

            }
        }elseif ($extension == 'jpg' || $extension == 'png') {
            $dir = 'imagenes/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['archivo']['tmp_name'];
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                $new_imgen =  str_replace('imagenes/', '',$new_name_file);
                
                
                

            }
        }elseif ($extension == 'mp3') {
            $dir = 'audio/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['archivo']['tmp_name'];
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                $new_audio=$new_name_file;
                
                

            }
        }else{
            header("Refresh: 3; URL= ../form_public.php");
        echo '
            <script type="text/javascript">


            $(document).ready(function(){

	        swal({
	        title: "Tipo de archivo no admitido",
		    icon: "warning",
	        })
            });


            </script>';
        }
    }else{
        header("Refresh: 3; URL= ../form_public.php");
        echo '
            <script type="text/javascript">


            $(document).ready(function(){

	        swal({
	        title: "No se ha seleccionado ningun archivo",
		    icon: "error",
	        })
            });


            </script>';

    }
    //exit;

    //$archivo=['archivo']['name'];
    $titulo = $_POST['titulo'];
    $public = $_POST['public'];
    $categoria = $_POST['categoria'];

    
    $date = (new DateTime())->format('y-m-d');
    //echo ("<h4>$date</h4>");
    //echo ("<h4>$new_imgen</h4>");
    //exit;


    $sql = " INSERT INTO `publicacion` ( `id_medico_pu`,`titulo_public`,`text_public`, `link_imagen`,`link_video`,`link_audio`,`link_archivo`,`fecha_public`,`categoria_public`,`me_gusta_pu`, `estado`) 
    VALUES (

        '1',
        '$titulo',
        '$public',
        '$new_imgen',
        '$new_video',
        '$new_audio',
        '$new_archivo',
        '$date',
        '$categoria',
        '10',
        'A')";
        //echo ("<h4>$new_imgen</h4>");
        //exit;
    

      
    if ($mysqli->query($sql)) {
        $status = 'success';
    } else {
        $status = 'error';
        echo "error" . mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$status);

    header("Refresh: 2; URL= ../index.php?s=" . $status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Publicado",
		icon: "success",
	  })
});


</script>

';
}
