<?php
    $conexion=mysqli_connect("localhost","root","","ingenieria2") or 
        die("Problemas en la conexión");


    $usuario = mysql_query("SELECT id FROM usuario WHERE nombreusuario = '{$_REQUEST['nombreusuario']}'"); 

    if( mysql_num_rows($usuario) > 0 ){
        header("Location: /?registro=usuarioexist");
        die;
    }

    mysqli_query($conexion,"insert into usuario(password,localidad,nombreusuario,nombre,apellido,telefono) values ('$_REQUEST[password]','$_REQUEST[localidad]','$_REQUEST[nombreusuario]','$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[telefono])") or 
        die("Problemas en el select: ".mysqli_error($conexion));
    mysqli_close($conexion);

    header("Location: /?registro=correcto");
?>