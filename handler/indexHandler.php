<?php

session_start();
/**
 * @author Perraudeau Victor  <perraudeau.victor@gmail.com>
 */
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
//checkUser($email, sha1($password))
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Veuillez indiquer un email valide";
        header('Location:../view/index.php');
    } else {
        if (strlen($_POST['password']) < 8) {
            $_SESSION['error'] = "Veuillez indiquer un mot de passe de 8 caractères minimum";
            header('Location:../view/newUser.php');
        } else {
            if (1 == 2) {
                $_SESSION['email'] = $_POST['email'];

                header('Location:../view/notesWall.php');
            } else {

                $_SESSION['error'] = "Vous avez indiqué un email ou un mot de passe incorrect. Vérifiez votre email et votre mot de passe et réessayez";
                header('Location:../view/index.php');
            }
        }
    };
} else {
    $_SESSION['error'] = "Veuillez rentrer un email et un password";
    header('Location:../view/index.php');
}
