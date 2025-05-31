<?php
$flux = simplexml_load_file('https://exemple.com/rss.xml'); // Remplace par l'URL du flux RSS

foreach ($flux->channel->item as $article) {
    echo "<h3><a href='{$article->link}' target='_blank'>{$article->title}</a></h3>";
    echo "<p>{$article->description}</p>";
}
?>
