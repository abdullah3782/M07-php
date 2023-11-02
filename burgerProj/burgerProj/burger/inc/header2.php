<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Subscribe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

<div>
    <nav class="navbar navbar-expand-lg" style="background-color: black; padding-top: 30px; padding-bottom: 20px;" id="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a href="../index.php" class="nav-link" id="log" style="color: white;">Home</a>
                </li>
                <!-- Resto de los elementos del menú -->
               
                <li class="nav-item">
                    <a href="register.php" class="nav-link" id="log" style="color: white;">Register</a>
                </li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <!-- Muestra el botón de log out si hay una sesión activa -->
                    <li class="nav-item">
                    <a href="login.php" class="nav-link" id="log" style="color: white;">Log In</a>
                    
                    </li>
                <?php else : ?>
                    <!-- Muestra el botón de inicio de sesión si no hay una sesión activa -->
                    <li class="nav-item">
                    <a href="logout.php" class="nav-link" id="log" style="color: white;">Log Out</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>

</body>

</html>
