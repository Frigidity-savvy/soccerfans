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


        $inputID=$_GET["inputID"];
        $inputEssay_name=$_GET["inputEssay_name"];
        $inputAuthor_id=$_GET["inputAuthor_id"];
    if(isset($inputID,$inputEssay_name,$inputAuthor_id))
    {
         echo "Succeessfully summit <br>";
    }
    else
    {
        echo "Failed <br>";
    }



    $mysqli = new mysqli('localhost', 'root', 'tyc19981002', 'soccerfans');
    //连接数据库

    $sql="insert into essay(essay_id,essay_name,author_id) values($inputID,'$inputEssay_name',$inputAuthor_id);";//设置查询指令

    $sql1="select * from essay where essay_id=$inputID;";
    $sql2="select  * from users where ID= $inputAuthor_id;";
    $result2 = $mysqli->query($sql2);

    while($row1=mysqli_fetch_assoc($result2)) {
        echo "<tr><td>" . $row1["ID"] . "</td><td>" . $row1["Niki_name"] . "</td><td>" . $row1["like_team"] . "</td><td>" . $row1["count_essay"] . "</td><tr>";
    }


    $result = $mysqli->query($sql);//执行查询while($row=mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条
    $result1 = $mysqli->query($sql1);
    $result3= $mysqli->query($sql2);





    while($row=mysqli_fetch_assoc($result1))//将result结果集中查询结果取出一条
    {
        echo"<tr><td>".$row["essay_id"]."</td><td>".$row["essay_name"]."</td><td>".$row["author_id"]."</td><tr>";

    }

    while($row2=mysqli_fetch_assoc($result3)) {
        echo "<tr><td>" . $row2["ID"] . "</td><td>" . $row2["Niki_name"] . "</td><td>" . $row2["like_team"] . "</td><td>" . $row2["count_essay"] . "</td><tr>";
    }
    ?>

        <a href="info.php">Back to Home</a>


</body>