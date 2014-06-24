<?php

include_once '../Model/createNoteModel.php';
session_start();
$title=$_POST['title'];
$note=$_POST['note'];
$date=$_POST['date'];
$place=$_POST['place'];
$color=$_POST['color'];
$email=$_SESSION['email'];


var_dump($email);
createNoteModel::insertNewBigNote($email, $title, $note, $date, $place, $color);
