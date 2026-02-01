<?php
        require_once __DIR__ . '/config.php';

        $imgs = @new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db
        );
        
        if ($imgs->connect_error) {
            echo 'Errno: '.$mysqli->connect_errno;
            echo '<br>';
            echo 'Error: '.$mysqli->connect_error;
            exit();
        }



    ?>
