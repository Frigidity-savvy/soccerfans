<?php
/**
 * Created by PhpStorm.
 * User: 谭逸骢
 * Date: 2018/5/23
 * Time: 20:03
 */
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="textml; charset=utf-8" />
    <title>提示</title>
</head>

<body>
<table style="border:dotted;border-color:#F06">

    <?php


    $Team=$_GET["Pounds"];

    if(isset($Team))
    {
        echo "Succeessfully summit <br>";
    }
    else
    {
        echo "Failed <br>";
    }



    $mysqli = new mysqli('localhost', 'root', 'tyc19981002', 'soccerfans');
    //连接数据库



    $sql="call elevate_wage('$Team');";


    $result = $mysqli->query($sql);


    ?>

    <a href="info.php">Back to Home</a>


</body>