<?php
session_start();
if (!isset($_SESSION['game_state'])) {
    $game_state = array(
        'room' => 'room1',
        'objects' => array(),
        'tv' => false,
    );
    $_SESSION['game_state'] = $game_state;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EscapeRoom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    switch ($_SESSION['game_state']['room']) {
        case 'room1':
            echo "<img src='img/room1.png' alt='' usemap='#room1'>";
            break;
        case 'room2':
            echo "<img src='img/room2.png' alt='' usemap='#room2'>";
            break;
        case 'bookcase':
            echo "<img src='img/bookcase.jpg' alt='' usemap='#bookcase'>";
            break;
        case 'room1_1':
            echo "<img src='img/room1_1.png' alt='' usemap='#room1'>";
            break;
        case 'room2_1':
            echo "<img src='img/room2_1.png' alt='' usemap='#room2'>";
            break;
        case 'room2_card':
            echo "<img src='img/room2_card.png' alt='' usemap='#room2'>";
            break;
        case 'room2_pic':
            echo "<img src='img/room2_pic.png' alt='' usemap='#room2'>";
            break;
        case 'room2_2':
            echo "<img src='img/room2_2.png' alt='' usemap='#room2'>";
            break;
        case 'room2_3':
            echo "<img src='img/room2_3.png' alt='' usemap='#room2'>";
            break;
    }
    ?>

    <map name="bookcase">
        <area target="" alt="bookcase" title="bookcase" href="book.php" coords="105,5,168,249" shape="rect">
    </map>

    <map name="room1">
        <?php
        $obj = $_SESSION['game_state']['objects'];
        if (in_array('box_code', $obj) && in_array('card_code', $obj) && in_array('book_code', $obj)) {
            echo "<area target='' alt='' title='codebox' href='end.php' coords='1383,623,1499,470' shape='rect'>";
        }
        ?>
        <area target="" alt="" title="box" href="box.php" coords="279,629,483,449" shape="rect">
        <?php
        if (in_array('box_key', $obj)) {
            echo "<area target='' alt='door' title='door' href='door.php' coords='749,268,869,481' shape='rect'>";
        }
        ?>
    </map>

    <map name="room2">
        <area target="" alt="card" title="card" href="card.php" coords="706,495,885,389" shape="rect">
        <area target="" alt="pic2" title="pic2" href="pics.php" coords="1102,42,1177,165" shape="rect">
        <?php
        if (in_array('pic_key', $obj)) {
            echo "<area target='' alt='closet' title='closet' href='remote.php' coords='794,213,949,375' shape='rect'>";
        }
        if ($_SESSION['game_state']['tv']) {
            echo "<area target='' alt='books' title='books' href='bookcase.php' coords='818,48,969,187' shape='rect'>";
        }
        if (in_array('remote', $obj)) {
            echo "<area target='' alt='tv' title='tv' href='tv.php' coords='529,148,692,262' shape='rect'>";
        }
        ?>
    </map>

    <div class="inventory">
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][0])) {
                $item1 = $_SESSION['game_state']['objects'][0];
                echo "<img src='img/$item1.png' alt=''>";
            }
            ?>
        </div>
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][1])) {
                $item2 = $_SESSION['game_state']['objects'][1];
                echo "<img src='img/$item2.png' alt=''>";
            }
            ?>
        </div>
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][2])) {
                $item3 = $_SESSION['game_state']['objects'][2];
                echo "<img src='img/$item3.png' alt=''>";
            }
            ?>
        </div>
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][3])) {
                $item4 = $_SESSION['game_state']['objects'][3];
                echo "<img src='img/$item4.png' alt=''>";
            }
            ?>
        </div>
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][4])) {
                $item5 = $_SESSION['game_state']['objects'][4];
                echo "<img src='img/$item5.png' alt=''>";
            }
            ?>
        </div>
        <div class="item">
            <?php
            if (isset($_SESSION['game_state']['objects'][5])) {
                $item6 = $_SESSION['game_state']['objects'][5];
                echo "<img src='img/$item6.png' alt=''>";
            }
            ?>
        </div>
        <?php
        $room = $_SESSION['game_state']['room'];
        if (str_contains($room, 'room2') || $room === 'bookcase') {
            echo "<a class='item' href='back.php'><img src='/img/back.svg' alt=''></a>";
        }
        ?>
        <a class="item" href="refresh.php"><img src="/img/refresh.png" alt=""></a>
    </div>
</body>

</html>