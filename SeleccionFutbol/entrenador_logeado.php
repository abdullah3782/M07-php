<?php 
require __DIR__ . '/functions.php'; 
myHeader();
myMenuLoged()


?>

<?php
$loginCount = isset($_COOKIE['login_count']) ? $_COOKIE['login_count'] : 0;
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENTRENADOR</title>
    <style>
    
    h1 {
        text-align: center;
    }
    
    body {
        background-color: lightblue;
    }

    </style>
</head>
<body>
   <h1>Bienvenido Entrenador</h1> 
</body>
</html>