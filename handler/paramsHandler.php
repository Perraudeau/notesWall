<?php

include_once '../Model/paramsModel.php';
session_start();
/**
 * @author Perraudeau Victor
 */
$_SESSION['errorParams'] ="";
if (paramsModel::checkPassword($_POST['currentPassword'])==1) {

    if (strlen($_POST['newPassword1']) < 8 && strlen($_POST['newPassword2'])<8) {
        $_SESSION['errorParams'] = "Veuillez indiquer un mot de passe de 8 caractères minimum";
        header('Location:../view/params.php');
    } else {
        if ($_POST['newPassword1'] == $_POST['newPassword2']) {
            paramsModel::changePassword($_SESSION['email'], $_POST['newPassword1']);
            $_SESSION['paramsOk'] = "le mot de passe a bien été changé";
            header('Location:../view/notesWall.php');
        } else {
            $_SESSION['errorParams'] = "Veuillez rentrer deux mots de passe identiques";
            header('Location:../view/params.php');
        }
    };
} else {
    header('Location:../view/params.php');
    $_SESSION['errorParams'] = "Le mot de passe actuel est incorrect";
}
