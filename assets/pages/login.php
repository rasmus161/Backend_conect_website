<?php include "./assets/pages_content/initial.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../css/signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>Login</title>
</head>

<body>
 <!-- underconstruction chec carefuly for mistates yap -->
    <?php include "../pages_content/header.php" ?>

    <main>
        <div class="container">

            <?php include "../pages_content/uppgift4/site_login_mesage.php" ?>

        </div>
        <div class="container" id="container-login">
            <?php include "../pages_content/site_login.php" ?>
            <h2>Login</h2>


            <form method="POST">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Name" required><br>

                <label for="password">password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>

                <button class="button-big" type="submit">Login</button>
            </form>

        </div>
    </main>
    <footer>
        <p> &copy; 2025-<?php echo date("Y"); ?> Rasmus.p All Rights Reserved</p>
    </footer>

    <script src="../../main.js"></script>
</body>

</html>

</html>