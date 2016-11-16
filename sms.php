<?php

header('Content-Type: text/html');
echo '<Response>';
    if( isset($_REQUEST['to']) && isset($_REQUEST['From']) && isset($_REQUEST['Body']) ){
        $to = split(',', $_REQUEST['to']);
        foreach( $to as $recipient ){
            echo '<Message to="'.$recipient.'">'.htmlspecialchars(substr($_REQUEST['From'].': '.$_REQUEST['Body'], 0, 1600)).'</Message>';
        }
    }
echo '</Response>';
