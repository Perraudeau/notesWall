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
        <script type='text/javascript'>
            function refreshContainer() {
                var container = document.getElementById("container");
                var content = container.innerHTML;
                container.innerHTML = content;
                $.ajax({
                    type: "GET",
                    url: "../view/notesWall.php",
                    dataType: 'html',
                    success: function(data) {
                        $("#container").load('../view/notesWallAjax.php');

                    }
                });
            }
            setInterval("refreshContainer()", 10000);
        </script>
        <div id="container">

            <?php
            echo $_SESSION['paramsOk'];
            $_SESSION['paramsOk'] = "";
            for ($index = 0; $index < count($result); $index++) {
                ?>
                <div id="note" style="background:<?php echo $result[$index]['color'] ?>">
                    <li align="center"><h1><?php echo $result[$index]['title'] ?></h1></li>
                    <li align="center"><?php echo noteWallModel::getEmailUser($result[$index]['idUser']) ?></li><br>
                    <li align="justify"><?php echo $result[$index]['text'] ?></li><br><br>
                    <li><?php echo notesWallContainer::timestampTofr($result[$index]['alarmDate']) ?></li>
                    <li align="right"><?php echo $result[$index]['place'] ?></li>
                </div>
                <br>
            <?php } ?>
        </div>
        <?php
    }

    public static function timestampToFr($date) {
        return 'Le ' . date('d/m/Y à H:i', strtotime(str_replace('-', '/', $date)));
    }

    public static function FrToTimestamp($date) {
       $date = str_replace(array(' ', ':'), '-', $date);
        list($hour,$minute,$second,$day,$month,$year) = explode('-', $date);
        $timestamp = mktime($hour,$minute,$second,$month, $day, $year);
        return $timestamp;
    }

}
?>