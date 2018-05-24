

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
    <caption>球队</caption>

    <tr><th>name</th><th>league/p_team</th><th>avg_wage</th></tr>
    <?php
    $name=$_GET["team"];
    $mysqli = new mysqli('localhost', 'root', 'tyc19981002', 'soccerfans');
    //连接数据库


    $sql="select *from team where name='$name';";//设置查询指令
    $result = $mysqli->query($sql);//执行查询
    while($row=mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条
    {
        echo"<tr><td>".$row["name"]."</td><td>".$row["league"]."</td><td>".$row["avg_increase_wage"]."</td><tr>";

    }

    $sql2="select *from player where p_team='$name';";
    $result2= $mysqli->query($sql2);
    while($row=mysqli_fetch_assoc($result2))//将result结果集中查询结果取出一条
    {
        echo"<tr><td>".$row["p_name"]."</td><td>".$row["p_team"]."</td><td>".$row["salary"]."</td><tr>";

    }

    ?>
</table>
<a href="info.php">返回</a>


</body>




<html>
