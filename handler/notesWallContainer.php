<?php
include_once '../model/noteWallModel.php';

/**
 *
 * @author leroux
 */
//affichage des notes
class notesWallContainer {

    public static function container() {
        $result = noteWallModel::getNotes();
        ?>
        <div id="container">
            <?php for ($index = 0; $index < count($result); $index++) { ?>
            <div id="note" style="background:<?php echo $result[$index]['color'] ?>;">
                <li align="center"><?php echo $result[$index]['title'] ?></li>
                <li><?php echo noteWallModel::getEmailUser($result[$index]['idUser']) ?></li>
                <li><?php echo $result[$index]['text'] ?></li>
                <li><?php echo $result[$index]['creationDate'] ?></li>
                <li><?php echo $result[$index]['place'] ?></li>
                <li><?php echo $result[$index]['alarmDate'] ?></li>
                </div>
                <br>
                <?php } ?>
            </div>
            <?php
        }
    }
    ?>