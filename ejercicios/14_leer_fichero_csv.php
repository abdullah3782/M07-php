<?php
$filename = './usser.csv';
$data = [];

// open the file
$f = fopen($filename, 'r');

if ($f === false) {
    die('Cannot open the file ' . $filename);
}

// read each line in CSV file at a time
while (($row = fgetcsv($f)) !== false) {
    $data[] = $row;
}

// close the file
fclose($f);

function sanitizeInput($input) {

    $sanitizedInput = filter_var($input, FILTER_SANITIZE_STRING);
    return $sanitizedInput;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los valores del formulario y sanitízalos
    $enteredUser = sanitizeInput(trim($_POST['username']));
    $enteredPass = sanitizeInput(trim($_POST['password']));

    // Valida que los campos no estén vacíos
    if (empty($enteredUser) || empty($enteredPass)) {
        echo 'Por favor, ingresa ambos campos.';
    } else {
        $data[] = [$enteredUser, $enteredPass];

    
        $f = fopen($filename, 'w');

        foreach ($data as $row) {
            fputcsv($f, $row);
        }

       
        fclose($f);

        echo 'Credenciales guardadas correctamente en el archivo CSV.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="username" placeholder="User">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="submit" value="Guardar Credenciales">
    </form>
</body>
</html>
