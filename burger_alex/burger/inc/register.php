<?php
require 'header.php';

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';
const PASSWORD_REQUIRED = 'Please enter a password';

$errors = [];
$inputs = [];

// sanitize and validate name
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;

if ($name) {
    $name = trim($name);
    if ($name === '') {
        $errors['name'] = NAME_REQUIRED;
    }
} else {
    $errors['name'] = NAME_REQUIRED;
}

// sanitize & validate email
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

// validate password
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$inputs['password'] = $password;

if (!$password) {
    $errors['password'] = PASSWORD_REQUIRED;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Paste the CSS styles here */
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
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc5200;
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
    <title>Your Page Title</title>
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
        <h3>BurgerHouse</h3>
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
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo htmlspecialchars($inputs['password'] ?? '') ?>" class="<?php echo isset($errors['password']) ? 'error' : '' ?>">
        <small><?php echo $errors['password'] ?? '' ?></small>
    </div>
    <button type="submit" id="RegisterButton">Register</button>
</form>

</body>
</html>
