<?php

include_once '../Model/createNoteModel.php';
session_start();

/**
 *
 * @author Perraudeau
 */

createNoteModel::insertNewNote($_SESSION['email'], $_POST['note']);
header('Location:../view/notesWall.php');
