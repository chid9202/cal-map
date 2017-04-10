<?php
try {
  require_once "config.php";
  try {
      $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
  } catch (PDOException $pe) {
      die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
  $room=$_GET['room'];
  if(!isset($room)){
    exit($e->getMessage());
  }
  $stmt = $dbh->prepare("SELECT tag, hostname, ip FROM inventory WHERE room = :room");
  $stmt->bindParam(':room', $room);
  $result = $stmt->execute() or exit("SELECT failed");

  $data = array();

  while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    array_push($data, array('Tag'=>$result['tag'],'Hostname'=>$result['hostname']));
  }

  $response = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
  );
  echo json_encode($response);
} catch (PDOException $e) {
  exit($e->getMessage());
}
?>
