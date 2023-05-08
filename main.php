<!-- коробка(ключ и кусок кода) - дверь - комната - картины(ключ) - полка(пульт) - телевизор(картинка книги) - книжный шкаф(лист с кодом) - первая комната - выключатель  -->

<?php
session_start();
if(!isset($_SESSION['game_state'])) {
    $game_state = array(
        'room' => 'room1',
        'objects' => array(),
    );
    $_SESSION['game_state'] = $game_state;
}
var_dump($_SESSION['game_state']);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* background-image: url('img/bg.jpg'); */
        }

        img {
            z-index: 0;
            width: 1500px;
            height: 800px;
        }

        .inventory {
            display: flex;
            justify-content: center;
        }

        .item {
            width: 150px;
            height: 150px;
            background-color: #9A7D5D;
            border: 2px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    if ($_SESSION['game_state']['room'] === 'room1') {
        echo "<img src='img/room1.png' alt=''  usemap='#room1'>";
    } else
        echo "<img src='img/room2.png' alt='' usemap='#room2'>";
    ?>
    <map name="room1">
        <area target="" alt="" title="" href="box.php" coords="1383,623,1499,470" shape="rect">
        <area target="" alt="" title="" href="" coords="279,629,483,449" shape="rect">
        <area target="" alt="" title="" href="" coords="749,268,869,481" shape="rect">
    </map>

    <map name="room2">
        <area target="" alt="" title="" href="" coords="515,135,696,272" shape="rect">
        <area target="" alt="" title="" href="" coords="821,53,967,191" shape="rect">
        <area target="" alt="" title="" href="" coords="1099,36,1181,163" shape="rect">
        <area target="" alt="" title="" href="" coords="1263,57,1372,196" shape="rect">
        <area target="" alt="" title="" href="" coords="254,61,350,179" shape="rect">
        <area target="" alt="" title="" href="" coords="796,219,947,261" shape="rect">
        <area target="" alt="" title="" href="" coords="797,264,935,366" shape="rect">
    </map>
    <div class="inventory">
        <div class="item">
            <?php
            if (!isset($_SESSION['click']))
                echo "<img src='' alt=''>";
            ?>
        </div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
    </div>
    <script>
        function printMousePos(event) {
            console.log(event.clientX, event.clientY)
        }

        document.addEventListener("click", printMousePos);
    </script>
</body>

</html>