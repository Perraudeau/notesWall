<?php

include_once 'DBconnectModel.php';

/**
 * return a boolean, true if the pass is ok, else false
 * @author perraudeau
 * @return boolean
 */
class paramsModel {

    public static function checkPassword($password) {
        $b = FALSE;
        $query = 'SELECT * from user where password="' . sha1($password) . '"';
        $i = SPDO::getInstance()->query($query);
        if ($i->rowCount() == 1) {
            $b = TRUE;
        } else {
            $b = FALSE;
        }
        return $b;
    }

    public static function changePassword($email, $password) {
        $query = 'UPDATE  user SET  password ="' . sha1($password) . '" WHERE  email="' . $email . '"';
        SPDO::getInstance()->exec($query);
    }

}
