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
        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/metro-bootstrap.css" rel="stylesheet">
        <!-- Load JavaScript Libraries -->
        <script src="./js/jquery/jquery.min.js"></script>
        <script src="./js/jquery/jquery.widget.min.js"></script>
        <script src="./js/jquery/jquery.mousewheel.js"></script>
        <script src="./js/prettify/prettify.js"></script>
        <script src="./js/holder/holder.js"></script>

        <!-- Metro UI CSS JavaScript plugins -->
        <script src="./js/load-metro.js"></script>

        <!-- Local JavaScript -->
        <script src="./js/docs.js"></script>
        <script src="./js/github.info.js"></script>

    </head>
    <body>
        <div class="metro">

            <header>
                <br><br><br><br>
                <h1 align="center">Notes <strong>Wall</strong></h1>
            </header>
            <center><?php
                if (isset($_SESSION['errorCreate'])) {
                    echo $_SESSION['errorCreate'];
                }
                ?></center><br>
            <div class="example">

                <form class="form-1" Method="POST" Action="../handler/createUserHandler.php" >
                    <fieldset>
                        <div>
                            <label>Email :</label>
                            <div class="input-control text" data-role="input-control">

                                <input type="email" name="email" required="required">
                                <button class="btn-clear" tabindex="-1"></button>
                            </div>
                            <label>Mot de passe :</label>
                            <div class="input-control password" data-role="input-control">

                                <input type="password" name="password" autofocus required="required" >
                                <button class="btn-reveal" tabindex="-1"></button>
                            </div>
                            <label>Confirmation du mot de passe :</label>
                            <div class="input-control password" data-role="input-control">

                                <input type="password" name="password2" autofocus required="required" >
                                <button class="btn-reveal" tabindex="-1"></button>
                            </div>
                            <br>
                            <p class="register" align="center">
                                <a href="/notesWall/view/"><input type="button" value="Retour"></a>
                                <input type="submit" value="Valider">

                            </p>
                        </div>
                    </fieldset>                          
                </form>

            </div>
        </div>
    </body>
</html>