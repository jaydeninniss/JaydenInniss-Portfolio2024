<?php
        // require_once __DIR__ . '/config.php';

            $db_host = 'localhost';
    $db_user = 'innis301_jayden';
    $db_password = 'Whistler19!';
    $db_db = 'innis301_img-gallery';

        // LIVE SERVER VERSION
        // $db_host = 'localhost';
        // $db_user = 'root';
        // $db_password = 'root';
        // $db_db = 'inniss301_img-gallery';

        $imgs = @new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db
        );
        
        if ($imgs->connect_error) {
            echo 'Errno: '.$imgs->connect_errno;
            echo '<br>';
            echo 'Error: '.$imgs->connect_error;
            exit();
        }



    ?>
