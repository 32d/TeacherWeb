<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Portfolio</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li class="active"><a href="education.php">學經歷</a></li>
                <li><a href="subject.php">研究與專長</a></li>
                <li><a href="#">研究計畫</a></li>
                <li><a href="#">教授課程</a></li>
                <li><a href="#">學生</a></li>
                <li><a href="#">著作目錄</a></li>
                <li><a href="#">常去網站</a></li>
                <li><a href="#">參考期刊</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container text-center">
    </div>
    </div>
<div class="container-fluid bg-3 text-center">
    <h3>看</h3><br>
    <div class="row">
        <div class="col-sm-3">


</body>
</html>