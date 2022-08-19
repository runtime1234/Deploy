<!DOCTYPE html>
<?php
if(isset($_GET['id'])){
    $page_id = $_GET['id']; //some_value
}
$link= mysqli_connect("localhost", "root", "root",'news');
$result = mysqli_query($link,"SELECT * FROM `news` WHERE id = $page_id ");
$row = mysqli_fetch_assoc($result);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<section class="news_wrapper">
<h1><?=$row["title"]?></h1>
<hr class='news_line'>
<p class='news_text-news'><?= $row["content"] ?></p>
<hr class='news_line'>
<a class="all_news" href="/">Все новости>></a>
</section>
</body>
</html>