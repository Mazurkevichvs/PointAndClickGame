<?php
session_start();
$_SESSION['game_state']['room'] = 'room2';
header('Location: main.php');
exit;
?>