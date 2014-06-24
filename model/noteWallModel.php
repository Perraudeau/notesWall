<?php
include_once 'DBconnectModel.php';

/**
 *
 * @author perraudeau
 */
class noteWallModel {

    public static function getNotes() {
        $i=0;
        $query = 'SELECT * FROM note ORDER BY creationDate DESC ';
        $request = SPDO::getInstance()->query($query);

        foreach ($request as $row) {
            $return[$i]['id'] = $row['id'];
            $return[$i]['idUser'] = $row['idUser'];
            $return[$i]['title'] = $row['title'];
            $return[$i]['text'] = $row['text'];
            $return[$i]['creationDate'] = $row['creationDate'];
            $return[$i]['place'] = $row['place'];
            $return[$i]['alarmDate'] = $row['alarmDate'];
            $return[$i]['color'] = $row['color'];
            $i++;
        }
        
        return $return;
    }
        public static function getEmailUser($id) {
        $query = 'SELECT email FROM user WHERE id = "' . $id . '"';
        $request = SPDO::getInstance()->query($query);
        foreach ($request as $row) {
            $return = $row['email'];
        }
        
        return $return;
    }
}