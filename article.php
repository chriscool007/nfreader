<?php include('includes/config.php'); 

$siteName = $_GET['siteName'];
$origLink = $_GET['origLink'];

$path = "http://query.yahooapis.com/v1/public/yql?q=";
$path .= urlencode("SELECT * FROM feed WHERE url='".$siteList[$siteName]."' and guid='".$origLink."'");
$path .= "&format=json";

$feed = json_decode(file_get_contents($path));
$feed = $feed->query->results->item;

include('views/article.tmpl.php'); 
