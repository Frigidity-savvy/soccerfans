<?php

/**
 * Created by PhpStorm.
 * User: 谭逸骢
 * Date: 2018/5/20
 * Time: 22:41
 */
?>
<!doctype html>
<html>

<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table style="border:dotted;border-color:#F06">
    <caption>喜欢</caption>
    <tr><th>ID</th><th>Niki_name</th><th>    喜欢球队所在联赛</th></tr>
    <?php
    $league=$_GET["league"];
    $mysqli = new mysqli('localhost', 'root', 'tyc19981002', 'soccerfans');
    //连接数据库


    $sql="select ID,Niki_name,like_team,league from users_team where league='$league';";//设置查询指令
    $result = $mysqli->query($sql);//执行查询
    while($row=mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条
    {
    echo"<tr><td>".$row["ID"]."</td><td>".$row["Niki_name"]."</td><td>".$row["like_team"]."</td><td>".$row["league"]."</td><tr>";

        }
        ?>
        </table>
        <a href="info.php">返回</a>


</body>




<html>
