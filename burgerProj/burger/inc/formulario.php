<?php
require __DIR__ . '/header2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Order</title>
    <link rel="stylesheet" href="/burger/css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 8px;
        }

        label {
            display: inline-block;
            margin-bottom: 8px;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .text-right {
            text-align: right;
        }

        .mt-4 {
            margin-top: 16px;
        }

        p {
            margin: 8px 0;
        }

        .form-check {
            margin-bottom: 8px;
        }

        footer {
            margin-top: 55%;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
        }

        .footer-section {
            max-width: 300px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p,
        .footer-section ul {
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        #search {
            margin-left: 350%;
        }

        #searchBar {
            margin-left: 230%;
            margin-bottom: -17%;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <input type="checkbox" id="ofertaCheckbox">
                <label for="ofertaCheckbox">Special Offer</label>
            </div>
            <div class="col-md-6 text-right">
                <input type="checkbox" id="personalizarCheckbox">
                <label for="personalizarCheckbox">Customize Order</label>
            </div>
        </div>

        <div class="mt-4">
            <p>Choose the quantity:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio" id="grande">
                <label class="form-check-label" for="grande">
                    Large
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio" id="small">
                <label class="form-check-label" for="small">
                    Small
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio" id="extrasmall">
                <label class="form-check-label" for="extrasmall">
                    Extra Small
                </label>
            </div>
        </div>

        <div class="mt-4">
            <p>Choose the ingredients:</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ingrediente1">
                <label class="form-check-label" for="ingrediente1">Ingredient 1</label>
            </div>
            <!-- Repeat the structure for other ingredients -->
        </div>

        <!-- Nuevas secciones -->
        <div class="mt-4">
            <p>Ofertas del día:</p>
            <!-- Listado de ofertas, precio y cantidad -->
            <!-- Puedes usar una caja numérica para la cantidad -->
        </div>

        <div class="mt-4">
            <p>Bocadillos personalizados:</p>
            <!-- Campos para personalizar los bocadillos -->
            <input type="number" name="cantidad_personalizados" placeholder="Cantidad">
            <br>
            <input type="radio" name="tamano" value="mini"> Mini
            <input type="radio" name="tamano" value="mediano"> Mediano
            <input type="radio" name="tamano" value="grande"> Grande
            <br>
            <select name="tipo_pan">
                <option value="barra">Pan de barra</option>
                <option value="sandwich">Pan sándwich</option>
                <option value="pages">Pan de pagés</option>
            </select>
            <br>
            <!-- Más opciones... -->
        </div>
    </div>

</form>

</body>
</html>
<?php
require __DIR__ . '/footer.php';
?>
