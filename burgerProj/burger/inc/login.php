<?php
session_start();
require __DIR__ . '/header2.php';

const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';

$errors = [];
$inputs = [];

$allowedUsers = [
    'abdullah@gmail.com' => 'abdullah01',
    'joel@gmail.com' => 'joel02',
    'alex@gmail.com' => 'alex03',
];

// sanitize and validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;

if ($email) {
    // validate email
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = EMAIL_INVALID;
    }
} else {
    $errors['email'] = EMAIL_REQUIRED;
}

// Check if the user is allowed
$user = $allowedUsers[$email] ?? null;

if (!$user) {
    $errors['email'] = 'Invalid email or password';
} else {
    // Check password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if ($password !== $allowedUsers[$email]) {
        $errors['password'] = 'Incorrect password';
    }
}

// Check if there are no errors and log in the user
if (empty($errors)) {
    // Set session variable with the user's email
    $_SESSION['user'] = $email;
    header('Location: formulario.php');
    exit; // Asegura que el script se detenga después de la redirección
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    section {
        text-align: center;
        margin-top: 50px;
    }

    h2 {
        color: #4CAF50;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        margin-top: 50px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    small {
        color: #f44336;
    }

    #LogButton {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #LogButton:hover {
        background-color: #45a049;
    }
</style>

</head>
<body>

<?php if (empty($errors)) : ?>
    <section>
        <h2>
            Thanks <?php echo htmlspecialchars($user) ?> for logging in!
        </h2>
    </section>
<?php endif; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        <h3>BurgerHouse</h3>
        <h2>Login</h2>
    </header>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($inputs['email'] ?? '') ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
        <small><?php echo $errors['email'] ?? '' ?></small>
    </div>
    <div>
        <label for="contra">Contraseña:</label>
        <input type="password" name="password" id="contra" placeholder="Contraseña" value="<?php echo htmlspecialchars($inputs['password'] ?? '') ?>" class="<?php echo isset($errors['password']) ? 'error' : '' ?>">
        <small><?php echo $errors['password'] ?? '' ?></small>
    </div>
    <button type="submit" id="LogButton">Login</button>
</form>

</body>
</html>
