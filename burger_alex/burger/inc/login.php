<?php

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';

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
?>

<?php if (count($errors) === 0) : ?>
    <section>
        <h2>
            Thanks <?php echo htmlspecialchars($name) ?> for your subscription!
        </h2>
        <p>Please follow the steps below to complete your subscription:</p>
        <ol>
            <li>Check your email (<?php echo htmlspecialchars($email) ?>) - Find the message sent from webmaster@phptutorial.net</li>
            <li>Click to confirm - Click on the link in the email to confirm your subscription.</li>
        </ol>
    </section>

<?php endif ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <header>
        <h3>BurgerHouse</h3>
        <h2>Login</h2>
    </header>
    <div>
         <br>
        <label for="name">Mail:</label>
        <input type="text" name="name" id="name" placeholder="Mail" value="<?php echo $inputs['name'] ?? '' ?>" class="<?php echo isset($errors['name']) ? 'error' : ''  ?>">
        <small><?php echo $errors['name'] ?? '' ?></small>
    </div>
    <div>
        <label for="name">Contraseña:</label>
        <input type="password" name="email" id="contra" placeholder="Contraseña" value="<?php echo $inputs['email'] ?? '' ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
        <small><?php echo $errors['email'] ?? '' ?></small>
    </div>
    <br>
    <button type="submit" id="LogButton">Login</button>
</form>

