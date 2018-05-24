<?php
/**
 * Created by PhpStorm.
 * User: 谭逸骢
 * Date: 2018/5/19
 * Time: 17:21
 */
/**
 * Created by PhpStorm.
 * User: 谭逸骢
 * Date: 2018/5/19
 * Time: 17:21
 */
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Football Fan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">首页检索 <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">更新</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">删除</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">添加</a>
            </li>

        </ul>

    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>足球球迷数据库</h1>
        <p class="lead">可以对每个球迷的喜欢球队球员进行查询.</p>
    </div>
    <form action="test.php" method="get">
        联赛: <input type="text" name="league"><br>

        <input type="submit">
    </form>
    <form  action="test2.php" method="get">
        球队: <input type="text" name="team"><br>
        <input type="submit">
    </form>




</main><!-- /.container -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
