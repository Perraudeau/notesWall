<?php

include_once '../handler/notesWallHandler.php';
include_once '../handler/paramsContainer.php';
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
paramsContainer::container();
//bas de page
notesWall::footer();
?>