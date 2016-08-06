<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
	content="text/html; charset=iso-8859-1" />
<title>Parsing an RSS Feed in PHP</title>
</head>
<body>
<?php
	$rssfeed = simplexml_load_file('http://rss.cnn.com/rss/cnn_topstories.rss');
	foreach ($rssfeed->channel as $channel) {
		echo '<h1>' . htmlentities($channel->title) . '</h1>';
		echo '<p>' . htmlentities($channel->description) . '</p>';
		echo '<p><a href="' . htmlentities($channel->link) . '">' .
			htmlentities($channel->link) . '</a></p>';
		echo '<ul>';
		foreach ($channel->item as $item) {
			echo '<li><a href="' . htmlentities($item->link) . '">';
			echo htmlentities($item->title) . '</a><br />';
			echo htmlentities($item->description) . '</li>';
		}
		echo '</ul>';
	}
?>
</body>
</html>
