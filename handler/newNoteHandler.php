<?php

include_once '../Model/createNoteModel.php';
session_start();
$title=$_POST['title'];
$note=$_POST['note'];
$date=$_POST['date'];
$place=$_POST['place'];
$color=$_POST['color'];
$email=$_SESSION['email'];
//createNoteModel:__construct($date);
createNoteModel::insertNewBigNote($email, $title, $note, $date, $place, $color);
