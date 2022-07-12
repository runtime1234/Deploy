<?php
if(isset($_GET['page'])){
    $page_id = $_GET['page']; //some_value
}
$link= mysqli_connect("localhost", "root", "root",'news');

$result = mysqli_query($link,"SELECT * FROM `news` WHERE id = $page_id ");
$row = mysqli_fetch_assoc($result);
printf("<h1>%s</h1>
<hr class='news_line'>
<p class='news_text-news'>%s</p>
<hr class='news_line'>",
    $row["title"], $row["content"]);
?>