<?php
session_start();

//Menu du haut
notesWall::headerNotesWall();
//barre pour permettre la creation d'une note rapide
notesWall::newNotesWallBar();
//affichage des notes
notesWall::container();
//bas de page
notesWall::footer();

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
                    <div id="header">  <ul id="onglets">
                            <li class="active"><a href="Accueil.html"> Accueil </a></li>
                            <li ><a href="Accueil.html"> Ajouter une note </a></li>
                            <li><a href="Forums.html"> Paramètres </a></li>
                            <li><a href="Livre_or.html"> Deconnexion </a></li>
                        </ul></div>
                    <?php
                }

                //barre pour permettre la creation d'une note rapide
                public static function newNotesWallBar() {
                    ?>
                    <form id="newNotesWallBar" action="newNotesWallBar.php" method="post">
                        <div><input placeholder="Note rapide" type="text" name="nom" /><input type="submit" value="Envoyer"></div>
                    </form>
                    <?php
                }

                //affichage des notes
                public static function container() {
                    ?>
                    <div id="container">Testcontainer</div>
                    <?php
                }

                //bas de page
                public static function footer() {
                    ?>
                </div>
            </body>
        </html>
        <?php
    }

}
?>


