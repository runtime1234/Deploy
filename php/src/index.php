<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class = "news">
 <section class = "news_wrapper">
     <h1>Новости</h1>
      <hr class = "news_line">
     <div class="container"><?php
     include "database.php"
     ?></div>
     <hr class = "news_line">
     <h2>Страницы:</h2>
     <div class="buttongrid"><?php
     include "page-link.php"
     ?></div>
 </section>
</body>
</html>