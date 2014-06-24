<?php
include_once '../handler/notesWallContainer.php';
include_once '../Model/createNoteModel.php';
session_start();
var_dump($_SESSION);
$title=$_POST['title'];
$note=$_POST['note'];
$date=  $_POST['date'];
$place=$_POST['place'];
$color=$_POST['color'];
$email=$_SESSION['email'];
createNoteModel::insertNewBigNote($email, $title, $note, $date, $place, $color);
//header('Location:../view/notesWall.php');
