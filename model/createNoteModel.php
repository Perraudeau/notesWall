<?php

include_once 'DBconnectModel.php';

/**
 *
 * @author perraudeau
 */
class createNoteModel {

    public static function insertNewNote($email, $note) {
        $query = 'INSERT INTO note (id,idUser,title,text,creationDate,place,alarmDate,color) VALUES (NULL , ' . createNoteModel::getIdUser($email) . ',"Note rapide","' . $note . '",CURRENT_TIMESTAMP,"Ici",CURRENT_TIMESTAMP,"#FFFFFF")';
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
    
    public static function insertNewBigNote($email,$title,$note,$date,$place,$color){
        $query = 'INSERT INTO note (id,idUser,title,text,creationDate,place,alarmDate,color) VALUES (NULL , ' . createNoteModel::getIdUser($email) . ',"'.$title.'","' . $note . '",CURRENT_TIMESTAMP,"'.$place.'","'.$date.'","'.$color.'")';
        echo $query;
        SPDO::getInstance()->exec($query);
        
    }
}
