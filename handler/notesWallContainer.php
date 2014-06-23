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
            
            <?php 
            echo $_SESSION['paramsOk'];
            $_SESSION['paramsOk']="";
            for ($index = 0; $index < count($result); $index++) { ?>
            <div id="note" onmouseover= style="background:<?php echo $result[$index]['color'] ?>">
                <li align="center"><h1><?php echo $result[$index]['title'] ?></h1></li>
                <li align="center"><?php echo noteWallModel::getEmailUser($result[$index]['idUser']) ?></li><br>
                <li align="justify"><?php echo $result[$index]['text'] ?></li><br><br>
                <li><?php echo $result[$index]['alarmDate']?></li>
                <li align="right"><?php echo $result[$index]['place'] ?></li>
                </div>
                <br>
                <?php } ?>
            </div>
            <?php
        }
    }
    ?>