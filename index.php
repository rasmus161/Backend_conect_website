<?php include "./assets/pages_content/initial.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./assets/css/info.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>about</title>
</head>
<!-- TO DO LIST-->
<!-- progress report done 1, 2, 3 not resiving the g mile but is corect, 4 Skriv ut använ-darnamnet bredvid “profilbilden” + not removing logout/changing profile to login on logout, 
  5 broken and not styled, 6, 7 no php logic -->

<!-- fix logo links on other than main page not working -->
<!-- folder uploads not found by uppg 5 profile img fix -->
<!-- add styling to profile img upload section -->
<!-- change login check form cookies to sesion cookies so that user cant manipulate the login -->


<!-- IDEAS-->
<!-- fix  spasing in the nav when howering over the nav -->
<!-- make about page in to 2 separate tabels of info -->
<!-- make time update with js every second to display time until date bether -->


<body>

    <?php include "./assets/pages_content/header.php" ?>
    <?php include "./assets/pages_content/uppgift6/visit_count.php" ?>
    <main>
        <div class="container">
            <div class="container-inner">
                <div class="half-width">
                    <h2>server info</h2>
                    <div class="p-position">
                        <?php include "./assets/pages_content/uppgift1/server_info.php" ?>
                    </div>
                </div>
                <div class="half-width">
                    <h2>user info</h2>
                    <div class="p-position">
                        <?php include "./assets/pages_content/uppgift1/user_info.php" ?>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <footer>
        <p> &copy; 2025-<?php echo date("Y"); ?> Rasmus.p All Rights Reserved</p>
    </footer>

    <script src="./main.js"></script>
</body>

</html>