<?php

include_once 'DBconnectModel.php';

/**
 *
 * @author perraudeau
 */
class createNoteModel {

    public static function insertNewNote($email, $note) {
        $query = 'INSERT INTO note (id,idUser,title,text,creationDate,place,alarmDate,color) VALUES (NULL , ' . createNoteModel::getIdUser($email) . ',"Note rapide","' . $note . '",CURRENT_TIMESTAMP,"Ici",CURRENT_TIMESTAMP,"#AAAAAA")';
        echo $query;
        SPDO::getInstance()->exec($query);
    }

    protected static function getIdUser($email) {
        $query = 'SELECT id FROM user WHERE email = "' . $email . '"';
        $request = SPDO::getInstance()->query($query);
        foreach ($request as $row) {
            $return = $row['id'];
        }
        
        return $return;
    }

}
