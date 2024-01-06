<?php
session_start();

class ProcesarCompra
{
    public function mostrarResumen()
    {
        // Obtengo los datos del formulario
        $partido = isset($_POST['partido']) ? $_POST['partido'] : '';
        $zona = isset($_POST['zona']) ? $_POST['zona'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $entradas = isset($_POST['entradas']) ? $_POST['entradas'] : '';
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';

        // Obtengo el precio según la zona seleccionada
        $precio = $this->obtenerPrecioZona($zona);

        // Calculo el precio total
        $precioTotal = $precio * $entradas;

        // Aqui muestro el resumen del pedido
        echo "<h2>Resumen del Pedido</h2>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Número de Teléfono: {$telefono}</p>";
        echo "<p>Partido Seleccionado: {$partido}</p>";
        echo "<p>Zona del Campo: {$zona}</p>";
        echo "<p>Número de Entradas: {$entradas}</p>";
        echo "<p>Precio Unitario: {$precio}€</p>";
        echo "<p>Precio Total: {$precioTotal}€</p>";
    }

    private function obtenerPrecioZona($zona)
    {
        $precios = [
            'Zona 1 Inferior' => 114,
            'Zona 1 Superior' => 90,
            'Zona 2 Inferior' => 80,
            'Zona 2 Centre' => 65,
        ];

        return isset($precios[$zona]) ? $precios[$zona] : 0;
    }
}

$procesarCompra = new ProcesarCompra();
$procesarCompra->mostrarResumen();
?>
