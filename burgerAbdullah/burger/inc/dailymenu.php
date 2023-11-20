<?php
require __DIR__ . '/header2.php';




session_start();

if (isset($_SESSION['user'])) :
    ?>
    <nav style="background-color: black;" id="navbar">            
    <img src="foto.png" alt="Logo del usuario" style="width: 40px;  margin-left: 1880px;"> 
     <a href="usuario.php" class="nav-link" style="color: white; margin-left: 1650px;">¡Hola, <?php echo $_SESSION['user']; ?>!</a>

    </nav>
<?php endif; 

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

    <div class="mt-4">
        <form method="post" action="pedido.php" >
      

            <div>
                <p>PLATOS POR CATEGORÍA:</p>

                <p>Entrantes:</p>
                <ul>
                    <li>Olivas</li>
                    <li>Pa amb tomàquet</li>
            
                </ul>

                <p>Platos Principales:</p>
                <ul>
                    <li type="checkbox">Toritilla de patatas</li>
                    <li type="checkbox">Patatas fritas</li>
                    <li type="checkbox">Pechuga de pollos</li>
                  
                </ul>

                <p>Postres:</p>
                <ul>
                    <li>Helado</li>
                    <li>Pastel</li>
                  
                </ul>
            </div>

            <p>Select 2 dishes for only 10€</p>
            
         
            
            
        </form>
    </div>



</body>
</html>
