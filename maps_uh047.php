<!DOCTYPE HTML>
<?php
include_once "/header.php";
require_once "config.php";
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    echo "Connected to $dbname at $dbhost successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
<HTML>
  <HEAD>
    <title>Map Application</title>
    <link rel="stylesheet" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/map.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.maphilight.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>

    <div id="left">
      <img src="./img/uh047.png" class="map" usemap="#uh0_map"/>
    </div>
  <HEAD>
  <BODY>
