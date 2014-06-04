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
        <script src="js/modernizr.custom.63321.js"></script>
                <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body class="metro">
        <header class="bg-dark" data-load="header.html"></header>
        <br><br><br><br>
        <h1 align="center">Notes <strong>Wall</strong></h1>
    </header>
    <br>
<center><?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }
    ?></center><br>
<div class="example">
    <form Method="POST" Action="../handler/indexHandler.php" >
        <fieldset>
            <label>Email :</label>
            <div class="input-control text" data-role="input-control">
                <input type="email" placeholder="type text" required="required">
                <button class="btn-clear" tabindex="-1"></button>
            </div>
            <label>Mot de passe :</label>
            <div class="input-control password" data-role="input-control">
                <input type="password" placeholder="type password" autofocus required="required">
                <button class="btn-reveal" tabindex="-1"></button>
            </div>

           

            <div align="center">
                <input type="submit" value="Valider" >   
                <input type="reset" value="Reset">
            </div>



        </fieldset>
    </form>


<br>
<p class="register">
    <button type="button" name="register">  Nouvel utilisateur</button></a>
</p>




</div>
</body>
</html>