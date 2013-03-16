<?php include('includes/config.php');

$siteName = $_GET['siteName'];

// For security reasons. If the string isn't a site name, goto index
if ( !isset($siteList[$siteName]) ) {
   include('views/index.tmpl.php');
   exit();
}

// YQL query (SELECT * from feed ... ) // Split for readability
$path = "http://query.yahooapis.com/v1/public/yql?q=";
$path .= urlencode("SELECT * FROM feed WHERE url='".$siteList[$siteName]."'");
$path .= "&format=json";

// Call YQL, and if the query didn't fail, cache the returned data
$feed = file_get_contents($path, true);

// Decode that shizzle
$feed = json_decode($feed);

// If something was returned, cache
if ( is_object($feed) && $feed->query->count ) {

}

// Include the view
include('views/site.tmpl.php');
