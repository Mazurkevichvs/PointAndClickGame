<?php
session_start();
$_SESSION['game_state']['room'] = 'bookcase';
header('Location: main.php');
exit;
?>