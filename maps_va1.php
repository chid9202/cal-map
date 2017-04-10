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
      activate_bar("bar_va1");
    </script>
  <HEAD>
  <BODY>
    <div class="row">
      <div class="col col-sm-8">
        <img src="./img/va1.jpg" class="map" usemap="#va1_map" />
    			<map name="va1_map">
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
