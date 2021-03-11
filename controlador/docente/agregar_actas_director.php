

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>

   <script src="../../assets/js/jquery-3.5.1.js"></script>
<?php
include_once '../../controlador/database.php';
$objeto = new Database();
$conexion = $objeto->connect();
include('../conexion.php');






if (isset($_POST['agregaracta'])) {



    $id_ficha = mysqli_real_escape_string($con, (strip_tags($_GET["ficha"], ENT_QUOTES)));




    if (isset($_FILES['actas'])) {
        
        if ($_FILES["actas"]["error"] > 0) {
            echo "Error al cargar archvio de evaluacion";
        } else {
            $permitidos = array('application/pdf');
            $limite_kb = 200000000;
            if (in_array($_FILES["actas"]["type"], $permitidos) && $_FILES["actas"]["size"] <= $limite_kb * 1024) {
                $ruta = "../../controlador/estudiante/actas/$id_ficha/";
                $archivo = $ruta . $_FILES["actas"]["name"];
                if (!file_exists($ruta)) {
                    mkdir($ruta, 0777, true);
                }
                if (!file_exists($archivo)) {
                    $resultado = @move_uploaded_file(
                        $_FILES["actas"]["tmp_name"],
                        $archivo
                    );
                }
                if ($resultado) {
                    echo '.';
                } else {
                    echo " actas no guardado";
                }
            } else {
                echo
                "<script> swal({
        title: '¡ERROR!',
        text: 'la evaluacion no esta permitido o excede el tamano',
        type: 'error',
      }).then(function(){ 
        location.href='fichas_asignadas_director.php';
        }
     );
     ;</script>";
            }
        }
    }                    echo
    "<script> swal({
title: '¡EXITO!',
allowOutsideClick:false,
text: 'Actas agregadas correctamente',
type: 'success',
}).then(function(){ 
    location.href='../../vista/rol_docente/fichas_asignadas_director.php';
}
);
;</script>";
   

}
