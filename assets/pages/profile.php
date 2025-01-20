<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../css/profile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <title>Profile</title>

    <!-- info ideas !-->
    <!-- lett the user only edit and save preferences on their own profile !-->

</head>

<body>

    <?php include "../pages_content/header.php" ?>
    <main>

        <div class="container" id="profile-content">
            <div id="left">
                <h3>name here</h3>
                <img src="../img/" alt="profile image">
                <div id="socials-container">
                    <img src="" alt="test1">
                    <img src="" alt="test2">
                    <img src="" alt="test3">

                </div>
            </div>
            <div id="right">
                <div id="start-chat-button">
                    <button class="button-small">start chat</button>
                </div>
                <div id="bio">
                    <div id="title">
                        <h3>Bio</h3>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book
                    </p>


                </div>

            </div>

        </div>

        <div class="container">
            <div class="container-inner" id="container-preferences">
                <div class="half" id="preferences-favorite">
                    <h3>Favorite activities</h3>
                    <form method="post">
                        <?php include "../pages_content/preference_forms.php" ?>
                        <button class="button-small" type="submit">Save</button>
                    </form>

                </div>
                <div class="half " id=" preferences-less-preferred">
                    <h3>Less preferred activities</h3>
                    <form method="post">
                        <?php include "../pages_content/preference_forms.php" ?>
                        <button class="button-small" type="submit">Save</button>
                    </form>
                </div>


            </div>
        </div>

        <div class="container">

        </div>



    </main>
    <footer>

    </footer>

    <script src="../../main.js"></script>
</body>

</html>

</html>