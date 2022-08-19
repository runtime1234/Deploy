<!DOCTYPE html>
<?php
$link = mysqli_connect('localhost','root','root','news') ;
$page = 0;
if(isset($_GET['page'])){
    $page = $_GET['page'] - 1;
}
$result = mysqli_query($link,  "SELECT * FROM `news` ORDER BY `idate` DESC LIMIT 5 OFFSET $page");
$news_count = mysqli_query($link ,"SELECT COUNT('id') AS 'news_numbers' FROM `news`");
$news_count_result = mysqli_fetch_assoc($news_count);

?>

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
     <div class="container">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class='one_news'>
             <span class='news_date'><?= date('d.m.Y',$row['idate']) ?></span>
              <a class='news_title-news' href='/view.php?id=<?= $row['id'] ?>'><?= $row["title"] ?></a>
              <p class='news_text-news'><?=$row["announce"]?></p>
         </div>
        <?php } mysqli_free_result($result); ?>
     </div>
     <hr class = "news_line">
     <h2>Страницы:</h2>
     <div class="buttongrid">
    <?php for ($i=0; $i < $news_count_result['news_numbers']/5 ; $i++) { 
        if ($i === 0) {
            $class = !isset($_GET['page']) || ($_GET['page'] - 1) == 0 ? 'news_page-link news_page-link--active' : 'news_page-link'; ?>
            <a class="<?= $class ?>" href="index.php?page=<?= ($i+1) ?>"><?= ( $i+1 ) ?></a> 
        <?php continue; }
        $class = isset($_GET['page']) && ($_GET['page'] - 1) == $i ? 'news_page-link news_page-link--active' : 'news_page-link'; ?>
        <a class="<?= $class ?>" href="index.php?page=<?= ($i+1) ?>"><?= ( $i+1 ) ?></a> 
        <? } ?>
    </div>
 </section>
</body>
</html>