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
  $tag = "1";
  $stmt = $dbh->prepare("SELECT tag, ip FROM pc WHERE tag = :tag");
  $stmt->bindParam(':tag', $tag);
  $stmt->execute() or exit("SELECT failed");

  $row = $stmt->fetch() or exit("fetch failed.");
  $response = $row["tag"];

  echo $response;
  print(json_encode($response));
} catch (PDOException $e) {
  exit($e->getMessage());
}
?>
