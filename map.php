<?php
session_start();
$_SESSION['click'] = 0
// if(!isset($_SESSION['click'])) {
//     $_SESSION['click'] = 0;
// } else $_SESSION['click'] = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body  {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('bg.jpg');
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
           background-color: #fff;
           border: 2px solid black; 
           display:flex;
           justify-content: center;
           align-items:center;
        }
    </style>
</head>
<body>
<?php
    // if($_SESSION['click'] = 0) {
        echo "<img src='room1.webp' alt=''  usemap='#room1'>";
    // } else if ($_SESSION['click'] = 1) {
    //     echo "<img src='room2.png' alt='' usemap='#click1'>";
    // };
?>
    
    <map name="room1">
        <area shape="rect" coords="6 ,6, 1702, 807 " href="map.php" alt="">
        <area shape="rect" coords="1625 ,583, 1554, 457 " href="map.php" alt="">
        <!-- <area shape="poly" coords="122, 142, 442, 465, 269, 613, 440, 465, 272,616, 187, 544" href="window.html" alt=""> -->
    </map>
    <map name="click1">
        <area shape="circle" coords="1300, 554, 100" href="" alt="">
    </map>
    <div class="inventory">
        <div class="item">
        <?php
        if(!isset($_SESSION['click'])) echo "<img src='' alt=''>";
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
    console.log(event.clientX,event.clientY)
}

document.addEventListener("click", printMousePos);
    </script>
</body>
</html>