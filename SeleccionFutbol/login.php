<?php

require __DIR__ . '/functions.php'; 
myHeader();
myMenu();
session_start();


const EMAIL_REQUIRED = 'Please enter your email';
const PASSWORD_REQUIRED = 'Please enter a password';
const LOGIN_INVALID = 'Invalid email or password';

$errors = [];
$inputs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $inputs['email'] = $email;

    if (!$email) {
        $errors['email'] = EMAIL_REQUIRED;
    }

   
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $inputs['password'] = $password;

    if (!$password) {
        $errors['password'] = PASSWORD_REQUIRED;
    }

    if (empty($errors)) {
        
        $storedUserDetails = file('login.csv', FILE_IGNORE_NEW_LINES);
        foreach ($storedUserDetails as $userDetail) {
            $userData = explode(', ', str_replace(['Name: ', 'Email: ', 'Password: '], '', $userDetail));
            if (isset($userData[1]) && isset($userData[2]) && $email === $userData[1] && password_verify($password, $userData[2])) {
                
                $_SESSION['user'] = $email;
                header('Location: entrenador_logeado.php');
                require __DIR__ . '/header2.php';
                exit;
            }
        }
        $errors['login'] = LOGIN_INVALID;
    }
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

    #logi {
        text-align: center;
    }
</style>

</head>
<body>

<?php if (isset($errors['login'])) : ?>
    <div style="color: red; text-align: center;">
        <p><?php echo $errors['login']; ?></p>
        <p>No tienes cuenta? <a href="register.php">Registrate aqui</a></p>
    </div>
<?php endif; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        
        <h2 id="logi">Login</h2>
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
