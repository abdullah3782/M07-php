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



