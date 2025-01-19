<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>Login</title>
</head>

<body>
    <?php include "../pages_content/header.php" ?>

    <main>
        <div class="container" id="container-login">
            <h2>login or sign up</h2>
            <?php include "./assets/pages_content/login_form.php" ?>

            <form action="welcome.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" placeholder="Name"><br>

                <label for="email">Email</label><br>
                <input type="text"placeholder="Email"><br>

                <button type="submit">Login</button>
            </form>

        </div>
    </main>
    <footer>

    </footer>

    <script src="../../main.js"></script>
</body>

</html>

</html>