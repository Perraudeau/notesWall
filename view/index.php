<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Notes Wall</title>


        <meta name="author" content="Perraudeau Victor & Leroux Alexis" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
                <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">

            <header>

                <h1>Notes <strong>Wall</strong></h1>
                <div class="support-note">
                    <span class="note-ie">Désolé, seulement les navigateurs récents sont acceptés</span>
                </div>
            </header>
            <center><?php
                if (isset($_SESSION['error'])){
                echo $_SESSION['error'];}
                ?></center><br>
            <section class="main">
                <form class="form-1" Method="POST" Action="../handler/indexHandler.php" >
                    <p class="field">
                        <input type="text" name="email" placeholder="Email">
                        <i class="icon-user icon-large"></i>
                    </p>
                    <p class="field">
                        <input type="password" name="password" placeholder="Password">
                        <i class="icon-lock icon-large"></i>
                    </p>
                    <p class="submit">
                        <button type="submit"><i class="icon-arrow-right icon-large"></i></button>
                    </p>

                    <br>
                    <p class="register">
                        <a href="./newUser.php"><button type="button" name="register">  Nouvel utilisateur</button></a>
                    </p>

                </form>

            </section>
        </div>
    </body>
</html>