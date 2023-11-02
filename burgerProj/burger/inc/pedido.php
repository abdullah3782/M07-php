<?php
require __DIR__ . '/formulario.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado HTML -->
</head>
<body>
    <div class="container mt-4">
        <h2>Resumen del Pedido</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ingredients = isset($_POST['ingredientes']) ? $_POST['ingredientes'] : [];
            $tamaños = isset($_POST['tamanio']) ? $_POST['tamanio'] : [];

            // Verifica si no se ha seleccionado ningún tamaño ni ingredientes
            if (empty($ingredients) && empty($tamaños)) {
                echo 'No has seleccionado ningún tamaño ni ingredientes.';
            } else {
                // Define el precio por ingrediente y el incremento por ingrediente adicional
                $precioPorIngrediente = 0.25;
                $incrementoPorIngrediente = 0.20;

                // Calcula el costo total de los ingredientes seleccionados
                $totalIngredientes = count($ingredients) * $precioPorIngrediente;
                $incrementoIngredientes = count($ingredients) * $incrementoPorIngrediente;

                // Calcula el costo total de los tamaños seleccionados
                $totalTamaños = array_sum($tamaños);

                // Calcula el subtotal antes de aplicar el IVA
                $subtotal = $totalIngredientes + $totalTamaños;

                // Multiplica el subtotal por la cantidad de cada tamaño seleccionado
                $cantidad_grande = isset($_POST['cantidad_grande']) ? intval($_POST['cantidad_grande']) : 1;
                $cantidad_small = isset($_POST['cantidad_small']) ? intval($_POST['cantidad_small']) : 1;
                $cantidad_extrasmall = isset($_POST['cantidad_extrasmall']) ? intval($_POST['cantidad_extrasmall']) : 1;

                $subtotal *= $cantidad_grande + $cantidad_small + $cantidad_extrasmall;

                // Define la tasa de IVA (por ejemplo, 21%)
                $ivaRate = 0.21;

                // Calcula el monto del IVA
                $iva = $subtotal * $ivaRate;

                // Calcula el total con IVA multiplicando por la cantidad total
                $totalConIVA = $subtotal + $iva;

                // Resto del código para mostrar el resumen (nombre, correo, tamaños, ingredientes, etc.)
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                $correo = isset($_POST['correo']) ? $_POST['correo'] : '';

                echo '<p>Nombre del usuario: ' . $nombre . '</p>';
                echo '<p>Correo electrónico del usuario: ' . $correo . '</p>';

                echo '<p>Tamaño seleccionado:</p>';
                echo '<ul>';
                foreach ($tamaños as $tamaño) {
                    $cantidad = 1;
                    switch ($tamaño) {
                        case '2':
                            $tamañoTexto = 'Large';
                            $cantidad = $cantidad_grande;
                            break;
                        case '1.5':
                            $tamañoTexto = 'Small';
                            $cantidad = $cantidad_small;
                            break;
                        case '1':
                            $tamañoTexto = 'Extra Small';
                            $cantidad = $cantidad_extrasmall;
                            break;
                        default:
                            $tamañoTexto = 'Desconocido';
                            break;
                    }
                    echo '<li>Tamaño: ' . $tamañoTexto . ' - Cantidad: ' . $cantidad . ' - Precio: ' . number_format($tamaño * $cantidad, 2) . '€</li>';
                }
                echo '</ul>';

                echo '<p>Ingredientes seleccionados:</p>';
                foreach ($ingredients as $ingredient) {
                    $cantidad = isset($_POST['cantidad_' . $ingredient]) ? intval($_POST['cantidad_' . $ingredient]) : 1;
                    echo '<li>Ingrediente: ' . $ingredient . ' - Cantidad: ' . $cantidad . ' - Precio: ' . number_format($precioPorIngrediente * $cantidad, 2) . '€</li>';
                }

                echo '<p>Costo adicional por ingredientes: ' . number_format($incrementoIngredientes, 2) . '€</p>';
                echo '<p>Subtotal: ' . number_format($subtotal, 2) . '€</p>';
                echo '<p>IVA (21%): ' . number_format($iva, 2) . '€</p>';
                echo '<p>Total con IVA: ' . number_format($totalConIVA, 2) . '€</p>';
            }
        }
        ?>
    </div>
</body>
</html>
