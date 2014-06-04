<?php
include_once '../Model/createUserModel.php';
session_start();
/**
 * @author Perraudeau Victor  <perraudeau.victor@gmail.com>
 */
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
//checkUser($email, sha1($password
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errorCreate'] = "Veuillez indiquer un email valide";
        header('Location:../view/newUser.php');
    } else {
        if (strlen($_POST['password']) < 8) {
            $_SESSION['errorCreate'] = "Veuillez indiquer un mot de passe de 8 caractères minimum";
            header('Location:../view/newUser.php');
        } else {
            if (createUserModel::checkNewEmail($email)) {
                $_SESSION['errorCreate'] = "L'email existe déjà";
                header('Location:../view/newUser.php');
            } else {
                createUserModel::insertNewUser($email,$_POST['password']);
                header('Location:../view/notesWall.php');
            }
        }
    };
} else {
    $_SESSION['errorCreate'] = "Veuillez rentrer un email et un password";
    header('Location:../view/newUser.php');
}
