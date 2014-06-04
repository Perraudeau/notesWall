<?php

include_once 'DBconnectModel.php';

class createUserModel {

    public static function checkNewEmail($email) {
        $b = FALSE;
        $query = 'SELECT email FROM user WHERE email="' . $email . '"';
        $i = SPDO::getInstance()->query($query);
        if ($i->rowCount() == 1) {
            $b = TRUE;
        } else {
            $b = FALSE;
        }
        return $b;
    }

    public static function insertNewUser($email, $password) {
        $query = 'INSERT INTO user (id,email,password,creationDate) VALUES (NULL , "'.$email.'", SHA1("'.$password.'"),CURRENT_TIMESTAMP)';
        SPDO::getInstance()->exec($query);
    }

}
