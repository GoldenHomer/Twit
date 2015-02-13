<?php 
  session_start();
  include("src/TwitterOAuth.php");

  $apikey = "Dl2rHXcqDVIZW0wjP4iZiLHFj";
  $apisecret = "leXgnjtNtPKbCy5rkl4OPr5vJVuip2DHqAUs6HETz7MRm4zeSv";
  $accesssecret = "77fQpDUqLQ5tqIYvvfztp26Q9wAuRyD2wOSlTby6nHhe2";
  $accesstoken = "547317116-pR0vwrR7GvocWmuBhHvrj7Jfkk2vqmogBKmbEr0U";

  $connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);

  print_r($connection); //Test

  $tweets = $connection -> get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=twitterapi&count=2");

?>