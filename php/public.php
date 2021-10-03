<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../codigo.js"></script>
</head>
 
<?php
    include 'conexion.php';
    $i='';
    if (isset($_GET['accion'])){
        $i=$_GET['accion'];
    
    }

     /* En esta parte se registra lo nuevos usuarios que 
     desen usar la plataforma y es coresponde al archivo registro.php */

    if ($i=="INS"){
        

        $titulo=$_POST['titulo'];
        $public=$_POST['public'];
        $categoria=$_POST['categoria'];
        //$sele=$_POST['sele'];
        $date = (new DateTime())->format('y-m-d');
        //echo ("<h4>$date</h4>");

    
    $sql = " INSERT INTO `publicacion` ( `id_medico_pu`,`titulo_public`,`text_public`, `link_imagen`,`link_video`,`link_audio`,`link_archivo`,`fecha_public`,`categoria_public`,`me_gusta_pu`, `estado`) 
    VALUES (

        '1',
        '$titulo',
        '$public',
        'yo',
        'yo',
        'yo',
        'yo',
        '$date',
        'pediatria',
        '10',
        'A')";
    

   if ($mysqli->query($sql))
    {
        $status='success';
    }
    else{
        $status='error';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$status);

    header("Refresh: 2; URL= ../index.php?s=".$status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "REGISTRADO",
		icon: "success",
	  })
});


</script>

';
}
