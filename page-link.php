
<?php
$news_count = mysqli_query($link ,"SELECT COUNT('id') AS 'news_numbers' FROM `news`");
$news_count_result = mysqli_fetch_assoc($news_count);
?>

<?php
mysqli_close($link);
?>
<?php
for ($i=0; $i < $news_count_result['news_numbers']/5 ; $i++) {
    echo '<a class="news_page-link" href="index.php?shift=' . $i*5 . '">' .( $i+1 ). '</a>';
}
?>
