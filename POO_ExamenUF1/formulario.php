
<?php
class ComprarEntradas
{
    public function mostrarFormulario()
    {
        echo "<h2>Formulario para comprar entradas</h2>";
        echo "<form action='procesar_compra.php' method='post'>";
        echo "<label for='partido'>Selecciona un partido:</label>";
        echo "<select name='partido' id='partido'>";
        echo "<option value='partido1'>Partido 1</option>";
        echo "<option value='partido2'>Partido 2</option>";
        echo "<option value='partido3'>Partido 3</option>";
        echo "</select>";
        echo "<br>";
        echo "<label>Selecciona una zona del campo:</label>";
        echo "<br>";
        echo "<label><input type='radio' name='zona' value='Zona 1 Inferior'> Zona 1 Inferior (114€)</label>";
        echo "<br>";
        echo "<label><input type='radio' name='zona' value='Zona 1 Superior'> Zona 1 Superior (90€)</label>";
        echo "<br>";
        echo "<label><input type='radio' name='zona' value='Zona 2 Inferior'> Zona 2 Inferior (80€)</label>";
        echo "<br>";
        echo "<label><input type='radio' name='zona' value='Zona 2 Centre' required> Zona 2 Centre (65€) </label>";
        echo "<br>";
        echo "<label for='email'>Introduce tu email:</label>";
        echo "<input type='email' name='email' required>";
        echo "<br>";
        echo "<label for='entradas'>Selecciona el número de entradas:</label>";
        echo "<select name='entradas'>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<option value='{$i}'>{$i}</option>";
        }
        echo "</select>";
        echo "<br>";
        echo "<label for='telefono'>Introduce tu número de teléfono:</label>";
        echo "<input type='tel' name='telefono' pattern='[0-9]{9}' required>";
        echo "<br>";
        echo "<input type='submit' value='COMPRAR'>";
        echo "</form>";
    }
}


$comprarEntradas = new ComprarEntradas();
$comprarEntradas->mostrarFormulario();
?>
