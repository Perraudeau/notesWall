<?php

include_once '../handler/notesWallHandler.php';
include_once '../handler/newNoteContainer.php';
/**
 *
 * @author Perraudeau
 */
session_start();

//Menu du haut
notesWall::headerNotesWall();
//barre pour permettre la creation d'une note rapide
notesWall::newNotesWallBar();
//container
newNotesContainer::container();
//bas de page
notesWall::footer();


?>