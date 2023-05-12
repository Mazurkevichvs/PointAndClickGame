<?php
session_start();
$inventory = $_SESSION['game_state']['objects'];
if(in_array('card_code',$inventory ) && !in_array('pic_key',$inventory )) 
    $_SESSION['game_state']['room'] = 'room2_card';
else if (in_array('remote',$inventory ) && $_SESSION['game_state']['tv'] === false)
    $_SESSION['game_state']['room'] = 'room2_2';
else if (in_array('remote',$inventory ) && $_SESSION['game_state']['tv']=== true)
    $_SESSION['game_state']['room'] = 'room2_3';    
else if (!in_array('card_code',$inventory ) && in_array('pic_key',$inventory ))
    $_SESSION['game_state']['room'] = 'room2_pic';
else if (in_array('card_code',$inventory ) && in_array('pic_key',$inventory ))
    $_SESSION['game_state']['room'] = 'room2_1';  
else   
    $_SESSION['game_state']['room'] = 'room2';
header('Location: main.php');
exit;
?>