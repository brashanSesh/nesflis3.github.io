<?php

    // conexion con la bd
    $conex=mysqli_connect ('github', 'root', '', 'nesflis') or die ('conexion fallida en la base de datos');

    // almacenar los datos en la tabla registro usuarios
    $registro_usuario=" INSERT INTO registro_usuarios  VALUES  ( ' ".$_POST["id_usuario"]." ', ' ".$_POST["reg_correo"]." ', ' ".$_POST["reg_contra"]." ',
    ' ".$_POST["reg_nombre"]." ', ' ".$_POST["reg_apellido"]." ', ' ".$_POST["reg_num_tarjeta"]." ', ' ".$_POST["reg_fecha_ven"]." ', 
    ' ".$_POST["reg_codi_seg"]." ' )";
    
    // almacenar los datos en la tabla usuario
    $usuario=" INSERT INTO usuarios VALUES ( ' ".$_POST["id_usuario"]." ', ' ".$_POST["reg_correo"]." ', ' ".$_POST["reg_contra"]." ' ) ";

    // ejecutar el protocolo para almacenar los datos en las tablas
    $res_reg_usuario=mysqli_query ($conex, $registro_usuario) or die ('error en el protocolo de almacenamiento');

    $res_usuario=mysqli_query ($conex, $usuario) or die ('error en el protocolo de almacenamiento');


    // cerrar la conexion de la bd
    mysqli_close ($conex);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css all browser -->
    <link rel="stylesheet" href="css/cssallbrowser.css">

     <!-- css -->
    <style>

        /* body de la pagina */
        .body_registro_usuario_php{
            background-color: black;
        }

        /* seccion del mensaje de confirmacion */
        section{
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30%;
            border-radius: 20px;
            box-shadow: 0px 0px 50px snow;

            background-color: red;
        }

        h1{
            text-align: center;
            font-size: 50px;

            color: white;
        }
    </style>

    <!-- icono de la pestaña -->
    <link rel="shortcut icon" href="img/iconos/icono_pestaña.png">

    <!-- titulo de la pestaña -->
    <title>Compra correcta</title>
</head>

<body class="body_registro_usuario_php">

    <section>

        <!-- mensaje de mensualidad comrpada con exito -->
        <h1>Mensualidad Comprada Con Exito</h1>
    </section>
    
    
</body>
</html>