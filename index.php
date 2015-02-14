<?php 
  session_start();
  include("src/TwitterOAuth.php");

  $apikey = "Dl2rHXcqDVIZW0wjP4iZiLHFj";
  $apisecret = "leXgnjtNtPKbCy5rkl4OPr5vJVuip2DHqAUs6HETz7MRm4zeSv";
  $accesssecret = "CP1jOfNhKESDZU6SGIe1EsPLt9azH0b8et8YwhfCg5j1e";
  $accesstoken = "547317116-hW7JVmyXLz8JR7Oq2TV4u0hDqDSQ9MiCoKD1sJDv";

  $connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);

  print_r($connection); //Test

  $tweets = $connection -> get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=josecanyewsee&count=2");

  foreach ($tweets as $tweet) {
  	echo $tweet -> text;

  	echo "<br />";
  }

  $response = $connection -> post("https://api.twitter.com/1.1/statuses/update.json",
  	array("status" => "This API sucks but it works."));
?>