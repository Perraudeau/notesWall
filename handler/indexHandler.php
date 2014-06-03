<?php
session_start();
/**
 * @author Perraudeau Victor  <perraudeau.victor@gmail.com>
 */

$email = $_POST['email'];
//checkUser($email, sha1($password))
if (1==2) {
    $_SESSION['email'] = $_POST['email'] ;
    
    header('Location:../view/notesWall.php');
}else{

   $_SESSION['error'] = "Vous avez indiqué un email ou un mot de passe incorrect. Vérifiez votre email et votre mot de passe et réessayez" ;
    header('Location:../view/index.php');
};