
<?php
$news_count = mysqli_query($link ,"SELECT COUNT('id') AS 'news_numbers' FROM `news`");
$news_count_result = mysqli_fetch_assoc($news_count);
?>

<?php
mysqli_close($link);
?>
<?php
for ($i=0; $i < $news_count_result['news_numbers']/5 ; $i++) {
    if ($i === 0) {
        $class = !isset($_GET['page']) || ($_GET['page'] - 1) == 0 ? 'news_page-link news_page-link--active' : 'news_page-link';
        echo '<a class="' . $class .'" href="index.php?page=' . ($i + 1) . '">' .( $i+1 ). '</a>';
        continue;
    }
    $class = isset($_GET['page']) && ($_GET['page'] - 1) == $i ? 'news_page-link news_page-link--active' : 'news_page-link';
    echo '<a class="' . $class . '" href="index.php?page=' . ($i+1) . '">' .( $i+1 ). '</a>';
}
?>
