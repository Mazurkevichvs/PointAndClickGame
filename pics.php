<?php
    session_start();
    if(!in_array('pic_key', $_SESSION['game_state']['objects'])) {
        if (!in_array('pic1', $_SESSION['game_state']['pics'])) {
            array_push($_SESSION['game_state']['pics'],'pic1');
        } else if(in_array('pic1', $_SESSION['game_state']['pics']) && !in_array('pic2', $_SESSION['game_state']['pics'])) {
            array_push($_SESSION['game_state']['pics'],'pic2');
        } else array_push($_SESSION['game_state']['objects'],'pic_key'); 
    }  
    header('Location: main.php');
    exit;
?>
