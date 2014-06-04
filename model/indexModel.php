<?php

include_once 'DBconnectModel.php';

class IndexModel {

    public static function checkUser($email, $password) {
        $b= FALSE;
        $query = 'SELECT id FROM user WHERE email="' . $email . '" AND password="' . $password . '"';
        $i = SPDO::getInstance()->query($query);
        if ($i ->rowCount() == 1)
		{
			$b = TRUE;           
		}
		else {
			$b = FALSE;
		}
        return $b;
    }

}
