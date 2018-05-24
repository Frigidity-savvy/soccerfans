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


    $DeleteID=$_GET["DeleteID"];

    if(isset($DeleteID))
    {
        echo "Succeessfully summit <br>";
    }
    else
    {
        echo "Failed <br>";
    }



    $mysqli = new mysqli('localhost', 'root', 'tyc19981002', 'soccerfans');
    //连接数据库
    $sql_show="select * from essay ;";
    $result10 = $mysqli->query($sql_show);
    while($row=mysqli_fetch_assoc($result10))//将result结果集中查询结果取出一条
    {
        echo"<tr><td>".$row["essay_id"]."</td><td>".$row["essay_name"]."</td><td>".$row["author_id"]."</td><tr>";

    }






    $sql="begin;";
    $sql1 = "delete from essay where author_id=$DeleteID;";
    $sql3 = "commit;";
    $sql2= "delete from users where ID=$DeleteID;";

    $result = $mysqli->query($sql);
    $result1 = $mysqli->query($sql1);
    $result2 = $mysqli->query($sql2);
    $result3= $mysqli->query($sql3);

    $result11= $mysqli->query($sql_show);
    while($row1=mysqli_fetch_assoc($result11))//将result结果集中查询结果取出一条
    {
        echo"<tr><td>".$row1["essay_id"]."</td><td>".$row1["essay_name"]."</td><td>".$row1["author_id"]."</td><tr>";

    }



    ?>

    <a href="info.php">Back to Home</a>


</body>