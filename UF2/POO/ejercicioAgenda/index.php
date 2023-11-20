<?php

require 'altacontacto.php';
include 'Agenda.php';

try {
    $contacto1 = new Contacto('Shebi', 'Asghar', '20018-05-10', 'shebi@gmail.com');
    $contacto2 = new Contacto('Abdullah', 'Waris', '2004-02-14', 'abdullah@gmail.com');
    $contacto3 = new Contacto('Kamran', 'Kamran', '1985-10-10', 'kamran@gmail.com');

    $contactos = [$contacto1, $contacto2, $contacto3];

    usort($contactos, function ($a, $b) {
        return $a->getEdad() - $b->getEdad();
    });

    echo "<strong>Lista de contactos ordenados por edad:</strong>\n";
    echo "<ul>";
    foreach ($contactos as $contacto) {
        echo "<li>" . $contacto->getContactoInfo() . "</li>";
    }
    echo "</ul>";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            color: #333;
        }

        h2 {
            color: #ff6600;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        small {
            color: #ff6600;
        }

        button {
            background-color: #ff6600;
            color: blue;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: greenyellow;
        }

        section {
            background-color: #dff0d8;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        ol {
            margin-top: 0;
        }

        ol li {
            margin-bottom: 10px;
        }

        .error {
            border: 1px solid #ff0000;
        }
    </style>
    <title>Agenda</title>
</head>
<body>

<?php if (empty($errors)) : ?>
    <section>
        <h2>
            Thanks <?php echo htmlspecialchars($name) ?> for registering!
        </h2>
        <p>Your account has been created successfully.</p>
    </section>
<?php endif; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        <h3>Agenda</h3>
        <h2>Register</h2>
    </header>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo htmlspecialchars($inputs['name'] ?? '') ?>" class="<?php echo isset($errors['name']) ? 'error' : '' ?>">
        <small><?php echo $errors['name'] ?? '' ?></small>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($inputs['email'] ?? '') ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
        <small><?php echo $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" value="<?php echo htmlspecialchars($inputs['dob'] ?? '') ?>" class="<?php echo isset($errors['dob']) ? 'error' : '' ?>">
        <small><?php echo $errors['dob'] ?? '' ?></small>
    </div>

    <button type="submit" id="RegisterButton">Register</button>
</form>

</html>