<?php
try {
  require_once "config.php";
  try {
      $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
  } catch (PDOException $pe) {
      die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
  /*$room=$_GET['room'];
  $stmt = $dbh->prepare("SELECT tag, hostname, ip FROM inventory WHERE room = :room");
  $stmt->bindParam(':room', $room);
  $result = $stmt->execute() or exit("SELECT failed");*/
  /*
  if($stmt->rowCount() > 0 ){
    $row = array();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $row[] +=
      echo "TAG: " . $result['tag'];
      echo '<br>';
      echo "HOSTNAME: " . $result['hostname'];
      echo '<br>';
      echo "IP: " . $result['ip'];
      echo '<br>';
      echo '---------------------------';
      echo '<br>';
    }
    $result = $stmt->fetch() or exit("fetch failed.");

    $response = array($result);
    print(json_encode($response));
  }
  else {
    echo 'nothing...';
  }
  */
  $data = array(
                            array('Tag'=>'11111', 'Hostname'=>'host11'),
                            array('Tag'=>'22222', 'Hostname'=>'hsot22') );
    $results = array(
            "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
          "aaData"=>$data);/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
}*/

echo json_encode($results);
} catch (PDOException $e) {
  exit($e->getMessage());
}
?>
