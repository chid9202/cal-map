<!DOCTYPE HTML>
<?php
include_once "/header.php";
require_once "config.php";
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.maphilight.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
      activate_bar("bar_uh0");
    </script>
  <HEAD>
  <BODY>
    <div class="row">
      <div class="col col-sm-8">
        <img src="./img/uh0-color.png" class="map" usemap="#uh0_map" />
    			<map name="uh0_map">
            <area href="maps_uh006.php" shape="rect" coords="65,465,152,563" id="006" class="room"/>
            <area href="maps_uh009.php" shape="rect" coords="251,520,347,609" id="009" class="room" />
            <area href="maps_uh047.php" shape="rect" coords="344,369,437,460" id="047" class="room"/>
            <area href="maps_uh052.php" shape="rect" coords="277,336,341,442" id="052" class="room"/>
            <area href="maps_uh037.php" shape="rect" coords="438,424,541,476" id="037" class="room"/>
            <area href="maps_uh038.php" shape="rect" coords="545,277,443,416" id="038" class="room"/>
            <area href="maps_uh043.php" shape="rect" coords="443,109,342,275" id="043" class="room"/>
            <area href="maps_uh055.php" shape="poly" coords="251,234,341,234,342,111,293,119,249,133" id="055" class="room"/>
            <area href="maps_uh054.php" shape="poly" coords="134,317,251,318,249,217,164,217,145,251" id="054" class="room"/>
    			</map>
      </div>
      <div class="col col-sm-4">
        <div id="db_info">
          <p id="tag"></p>
          <table id="data_table" class="display">
            <thead>
              <tr>
                <th>Tag</th>
                <th>Hostname</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </BODY>
</HTML>
