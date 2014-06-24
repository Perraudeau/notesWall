<?php
/**
 *
 * @author Perraudeau
 */
include_once '../handler/notesWallContainer.php';

class notesWall {

    //Menu du haut
    public static function headerNotesWall() {
        ?><html>
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
                <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
                <title>Notes Wall</title>


                <meta name="author" content="Perraudeau Victor & Leroux Alexis" />
                <link href="./css/style.css" rel="stylesheet">
                <link href="./css/metro-bootstrap.css" rel="stylesheet">
                <!-- Load JavaScript Libraries -->
                <link rel="stylesheet" type="text/css" href="./css/DateTimePicker.css" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="./js/DateTimePicker.js"></script>


                <!--Ajax part-->
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#validateNewNoteButton").click(function() {
                            var note = $("note").val();
                            var data = {note: note};
                            $.post("../handler/newNotesWallBar.php",
                                    data,
                                    function success(data) {
                                        $("#container").empty().hide();
                                        $("#container").append(data);
                                    });
                        });
                    })

                </script>

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
                    //action="../handler/newNotesWallBar.php"
                    ?>
                    <form id="newNotesWallBar"  method="post">
                        <div id="validateNewNote"><input id= "note" placeholder="  Note rapide" type="text" name="note" /><input id="validateNewNoteButton" type="submit" value="Envoyer"></div>
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

