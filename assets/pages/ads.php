<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../../assets/css/abs.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>ads</title>
</head>

<body>
    <?php include "../pages_content/header.php" ?>

    <main>
        <div class="container" id="filter">
            <div>
                <h3>preferred</h3>
                <?php include "../pages_content/preference_forms.php" ?>
            </div>
            <div>
                <h3>less preferred</h3>
                <?php include "../pages_content/preference_forms.php" ?>
            </div>
        </div>

        <div class="container">
            <div class="container-inner" id="profile-abs">
                <div id="left">
                    <h3>name here</h3>
                    <img src="../img/" alt="profile picture">
                </div>
                <div id="right">
                    <div id="bio-text">
                        <!-- profile content text img name import!-->
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book
                        </p>
                    </div>
                    <div id="preferred">
                        <!-- top liked to do activities import !-->
                        <p>import 1</p>
                        <p>import 2</p>
                        <p>import 3</p>
                    </div>
                </div>

            </div>
        </div>


    </main>
    <footer>

    </footer>

    <script src="../../main.js"></script>
</body>

</html>

</html>