<?php 
    session_start();

include '../db.php';

if(isset($_POST['login'])){

    $usuario = getUser($_POST['usuario']);


    //Verificar db con datos recibidos
    //
    //obtener datos usuario
    //
    // $error = "usuario inexistente"; 
    //
    //registrar informacion en la sesion

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = 'Valentin Mari';
    $_SESSION['usuario'] = 'valentin';
    $_SESSION['rol'] = 'admin';
    $_SESSION['id_usuario'] = 1;


    header("Location: /");
    die; 

    //redirigir al index
    //

}


include('../header.php');
?> 
<form action="/iniciarsesion.php" method="POST" role="form">
    <legend>Iniciar Sesión</legend>
    <?php if(!empty($error)) echo $error; ?>
    <input type="hidden" name="login" value="1">

    <div class="form-group">
        <label for="user">Usuario</label>
        <input type="text" class="form-control" name="usuario" id="user" placeholder="Usuario">
    </div>

    

    <div class="form-group">
        <label for="pass">Contraseña</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
    </div>

    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>

<?php include('../footer.php'); ?>