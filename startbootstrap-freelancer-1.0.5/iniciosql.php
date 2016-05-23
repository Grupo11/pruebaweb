<?php
	$usuario=$_POST['NombreUsuario'];
	$contraseña=$_POST['Password'];
	$conexion=mysqli_connect("localhost","root","","ingenieria2") or 
		die ("Problemas en la conexión");
	$consulta="SELECT * FROM  usuario WHERE NombreUsuario='$usuario' AND Password='$contraseña'";
	$res=mysqli_query($conexion,$consulta);
	$filas=mysqli_num_rows($res);

	if($filas>0){
		// el header me redirecciona al home de la web si filas es mayor que 0 significa que los datos del inicio de sesion coincidieron 
		header("location:index.html");
	}
	else{
		echo "Error en la autentificación";
	}
	
	mysqli_close($conexion);


?>