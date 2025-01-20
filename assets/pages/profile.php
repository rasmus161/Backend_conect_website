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
        <div class="container">

        </div>

        <div class="container">
            <div class="container-inner" id="container-preferences">
                <div class="half id=" preferences-favorite">
                    <h3>Favorite activities</h3>
                    <form method="post">
                        <label><input type="checkbox" name="favorite_activities[]" value="Reading"> Reading</label><br>
                        <label><input type="checkbox" name="favorite_activities[]" value="Traveling"> Traveling</label><br>
                        <label><input type="checkbox" name="favorite_activities[]" value="Cooking"> Cooking</label><br>
                        <label><input type="checkbox" name="favorite_activities[]" value="Sports"> Sports</label><br>
                        <label><input type="checkbox" name="favorite_activities[]" value="Music"> Music</label><br>
                        <button class="button-small" type="submit">Save</button>
                    </form>

                </div>
                <div class="half id=" preferences-less-preferred">
                    <h3>Less preferred activities</h3>
                    <form method="post">
                        <label><input type="checkbox" name="less_preferred_activities[]" value="Reading"> Reading</label><br>
                        <label><input type="checkbox" name="less_preferred_activities[]" value="Traveling"> Traveling</label><br>
                        <label><input type="checkbox" name="less_preferred_activities[]" value="Cooking"> Cooking</label><br>
                        <label><input type="checkbox" name="less_preferred_activities[]" value="Sports"> Sports</label><br>
                        <label><input type="checkbox" name="less_preferred_activities[]" value="Music"> Music</label><br>
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