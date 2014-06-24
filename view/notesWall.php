<?php

session_start();
include_once '../handler/notesWallHandler.php';
//Menu du haut
notesWall::headerNotesWall();
//barre pour permettre la creation d'une note rapide
notesWall::newNotesWallBar();
//affichage des notes
notesWall::container();
//bas de page
notesWall::footer();
?>

