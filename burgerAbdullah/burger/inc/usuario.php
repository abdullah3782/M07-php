<?php
require __DIR__ . '/header2.php';
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}


$userData = Usuario($_SESSION['user']);


function Usuario($username ) {
  
    $userData = array(
        'username' => $username,
        'name' => 'Nombre Usuario',
        'surname' => 'Apellido Usuario',
        'avatar' => 'foto.png', 
    );

    return $userData;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>

    <div class="mt-4">
        <h2>Perfil de Usuario</h2>
        

        <ul>
            <li>Username: <?php echo $userData['username']; ?></li>
          
            <li>Avatar: <img src="<?php echo ($userData['avatar']) ? $userData['avatar'] : 'burguer.png'; ?>" alt="Avatar"></li>
        </ul>

     
        <form method="post" action="dailymenu.php">
    <h3>Editar Perfil</h3>

    <label for="new_username">Nuevo Username:</label>
    <input type="text" name="new_username" id="new_username" value="<?php echo $userData['username']; ?>">

    <label for="new_name">Nuevo Nombre:</label>
    <input type="text" name="new_name" id="new_name" value="<?php echo $userData['name']; ?>">

    <button type="submit">Guardar Cambios</button>
</form>

       
        <form method="post" action="subir_avatar.php" enctype="multipart/form-data">
            <h3>Subir Nuevo Avatar</h3>
            <label for="nuevo_avatar">Seleccionar Archivo:</label>
            <input type="file" name="nuevo_avatar" id="nuevo_avatar">
            <button type="submit">Subir Avatar</button>
        </form>
    </div>

</body>
</html>
