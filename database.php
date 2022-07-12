<?php
$link = mysqli_connect('localhost','root','root','news') ;

if($link === false){
    echo "Не подключилось к БД" . mysqli_connect_error();
    exit();
}
$shift = 0;
if(isset($_GET['shift'])){
    $shift = $_GET['shift'];
}
$result = mysqli_query($link,  "SELECT * FROM `news` ORDER BY `idate` DESC LIMIT 5 OFFSET $shift");
while ($row = mysqli_fetch_assoc($result)) {
    printf("<div class='one_news'><span class='news_date'>%s</span><a class='news_title-news' href='/view.php?page=%s'>%s</a><p class='news_text-news'>%s</p></div>",date('d.m.Y',$row['idate']),$row['id'], $row["title"], $row["announce"]);
}
mysqli_free_result($result);
?>






