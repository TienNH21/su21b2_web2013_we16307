<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ( isset($_SESSION['error']) ) {
        echo $_SESSION['error'];
        unset( $_SESSION['error'] );
    }
    ?>
    <form
        method="POST"
        action="/we16307/src/auth/login.php"
    >
        <div>
            <label>Email</label>
            <input type="email" name="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" />
        </div>

        <button>Login</button>
    </form>
</body>
</html>
