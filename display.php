<?php
try {
  require_once "config.php";

  try {
      $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
      //echo "Connected to $dbname at $dbhost successfully.";
  } catch (PDOException $pe) {
      die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
  //$tag = $_GET['tag'];
  $room=$_GET['room'];
  $stmt = $dbh->prepare("SELECT tag, hostname, ip FROM pc WHERE room = :room");
  $stmt->bindParam(':room', $room);
  $stmt->execute() or exit("SELECT failed");

  $result = $stmt->fetch() or exit("fetch failed.");

  $tag = $result['tag'];
  $hostname = $result['hostname'];
  $ip = $result['ip'];
  while($result) {
    echo $tag[]
    echo '<br>';
  }
} catch (PDOException $e) {
  exit($e->getMessage());
}
?>
