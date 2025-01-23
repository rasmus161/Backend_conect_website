<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>about</title>
</head>
<!-- TO DO LIST-->
<!-- fix logo links on other than main page not working -->

<!-- IDEAS-->
<!-- fix  spasing in the nav when howering over the nav -->
<!-- make about page in to 2 separate tabels of info -->
<!-- make time update with js every second to display time until date bether -->


<body>
    <?php include "./assets/pages_content/header.php" ?>
    <main>
        <div class="container">
            <div class="container-inner">
                <div class="half-width">
                    <h2>server info</h2>
                    <div>
                        <?php include "./assets/pages_content/server_info.php" ?>
                    </div>
                </div>
                <div class="half-width">
                    <h2>user info</h2>
                    <div>
                        <?php include "./assets/pages_content/user_info.php" ?>
                    </div>
                </div>
            </div>

        </div>
        <?php include "./assets/pages_content/visit_count.php" ?>
    </main>
    <footer>

    </footer>

    <script src="./main.js"></script>
</body>

</html>