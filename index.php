<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '/model/DBconnectModel.php';
        foreach (SPDO::getInstance()->query('SELECT * FROM user') as $membre) {
            echo ($membre[1]);
        }
        ?>
    </body>
</html>
