<?php

/**
 *
 * @author Perraudeau
 */
include_once '../handler/notesWallContainer.php';
class notesWall {

    //Menu du haut
    public static function headerNotesWall() {
        ?>
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
                
                <div id="notesWall">
                    <img  align="right" src="../view/images/favicon.png">
                    <div id="header">  <ul id="onglets">
                            <li class="active"><a href="../view/notesWall.php"> Accueil </a></li>
                            <li ><a href="../view/newNote.php"> Ajouter une note </a></li>
                            <li><a href="../view/params.php"> Paramètres </a></li>
                            <li><a href="../handler/disconnect.php"> Deconnexion </a></li>
                        </ul></div>
                    <br><br><br>
                    <?php 
                }

                //barre pour permettre la creation d'une note rapide
                public static function newNotesWallBar() {
                    ?>
                    <form id="newNotesWallBar" action="../handler/newNotesWallBar.php" method="post">
                        <div><input placeholder="  Note rapide" type="text" name="note" /><input type="submit" value="Envoyer"></div>
                    </form>
                    <?php
                }

                //affichage des notes
                public static function container() {
                    notesWallContainer::container();
                }

                //bas de page
                public static function footer() {
                    ?>
                    <div align="center"> © Perraudeau & Leroux</div><br>
                </div>
            </body>
        </html>
        <?php
    }

}
?>

