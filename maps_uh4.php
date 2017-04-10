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
    <script>
      activate_bar("bar_uh4");
    </script>
  <HEAD>
  <BODY>
    <div class="row">
      <div class="col col-sm-8">
        <img src="./img/uh4.jpg" class="map" usemap="#uh4_map"/>
    			<map name="uh4_map">
            <area href="uh4/maps_uh401-01.php" shape="rect" coords="373,17,348,52" id="401.01" class="room"/>
            <area href="uh4/maps_uh401-02.php" shape="rect" coords="346,17,322,52" id="401.02" class="room"/>
            <area href="uh4/maps_uh401-03.php" shape="rect" coords="320,19,296,52" id="401.03" class="room"/>
            <area href="uh4/maps_uh401-04.php" shape="rect" coords="294,18,270,52" id="401.04" class="room"/>
            <area href="uh4/maps_uh401-05.php" shape="rect" coords="269,17,242,52" id="401.05" class="room"/>
            <area href="uh4/maps_uh401-06.php" shape="rect" coords="241,18,218,54" id="401.06" class="room"/>
            <area href="uh4/maps_uh401-07.php" shape="rect" coords="216,18,190,52" id="401.07" class="room"/>
            <area href="uh4/maps_uh401-08.php" shape="rect" coords="188,19,164,51" id="401.08" class="room"/>
            <area href="uh4/maps_uh401-09.php" shape="rect" coords="163,18,136,52" id="401.09" class="room"/>
            <area href="uh4/maps_uh401-10.php" shape="rect" coords="134,20,112,52" id="401.10" class="room"/>
            <area href="uh4/maps_uh401-11.php" shape="rect" coords="112,19,84,52" id="401.11" class="room"/>
            <area href="uh4/maps_uh401-12.php" shape="rect" coords="83,18,60,52" id="401.12" class="room"/>
            <area href="uh4/maps_uh401-13.php" shape="rect" coords="83,68,60,101" id="401.13" class="room"/>
            <area href="uh4/maps_uh401-14.php" shape="rect" coords="109,67,84,100" id="401.14" class="room"/>
            <area href="uh4/maps_uh401-15.php" shape="rect" coords="136,69,112,100" id="401.15" class="room"/>
            <area href="uh4/maps_uh401-16.php" shape="rect" coords="163,68,138,100" id="401.16" class="room"/>
            <area href="uh4/maps_uh401-17.php" shape="rect" coords="189,67,164,102" id="401.17" class="room"/>
            <area href="uh4/maps_uh401-18.php" shape="rect" coords="216,69,190,101" id="401.18" class="room"/>
            <area href="uh4/maps_uh401-19.php" shape="rect" coords="242,70,216,100" id="401.19" class="room"/>
            <area href="uh4/maps_uh401-20.php" shape="rect" coords="268,70,242,102" id="401.20" class="room"/>
            <area href="uh4/maps_uh401-21.php" shape="rect" coords="294,69,270,100" id="401.21" class="room"/>
            <area href="uh4/maps_uh401-22.php" shape="rect" coords="320,67,296,100" id="401.22" class="room"/>
            <area href="uh4/maps_uh401-23.php" shape="rect" coords="348,69,322,98" id="401.23" class="room"/>
            <area href="uh4/maps_uh401-24.php" shape="rect" coords="374,69,350,100" id="401.24" class="room"/>
            <area href="uh4/maps_uh401-25.php" shape="rect" coords="428,69,454,100" id="401.25" class="room"/>
            <area href="uh4/maps_uh401-26.php" shape="rect" coords="454,67,478,101" id="401.26" class="room"/>
            <area href="uh4/maps_uh401-27.php" shape="rect" coords="480,68,506,102" id="401.27" class="room"/>
            <area href="uh4/maps_uh401-28.php" shape="rect" coords="507,67,532,103" id="401.28" class="room"/>
            <area href="uh4/maps_uh401-29.php" shape="rect" coords="532,69,558,100" id="401.29" class="room"/>
            <area href="uh4/maps_uh401-30.php" shape="rect" coords="560,69,584,101" id="401.30" class="room"/>
            <area href="uh4/maps_uh401-31.php" shape="rect" coords="584,67,611,100" id="401.31" class="room"/>
            <area href="uh4/maps_uh401-32.php" shape="rect" coords="612,69,640,100" id="401.32" class="room"/>
            <area href="uh4/maps_uh401-33.php" shape="rect" coords="641,68,664,102" id="401.33" class="room"/>
            <area href="uh4/maps_uh401-34.php" shape="rect" coords="664,69,691,102" id="401.34" class="room"/>
            <area href="uh4/maps_uh401-35.php" shape="rect" coords="690,68,717,102" id="401.35" class="room"/>
            <area href="uh4/maps_uh401-36.php" shape="rect" coords="718,69,744,102" id="401.36" class="room"/>
            <area href="uh4/maps_uh401-37.php" shape="rect" coords="744,69,770,101" id="401.37" class="room"/>
            <area href="uh4/maps_uh401-38.php" shape="rect" coords="772,20,746,50" id="401.38" class="room"/>
            <area href="uh4/maps_uh401-39.php" shape="rect" coords="744,21,718,52" id="401.39" class="room"/>
            <area href="uh4/maps_uh401-40.php" shape="rect" coords="717,18,690,52" id="401.40" class="room"/>
            <area href="uh4/maps_uh401-41.php" shape="rect" coords="688,16,666,52" id="401.41" class="room"/>
            <area href="uh4/maps_uh401-42.php" shape="rect" coords="666,19,638,54" id="401.42" class="room"/>
            <area href="uh4/maps_uh401-43.php" shape="rect" coords="634,20,612,51" id="401.43" class="room"/>
            <area href="uh4/maps_uh401-44.php" shape="rect" coords="612,17,588,52" id="401.44" class="room"/>
            <area href="uh4/maps_uh401-45.php" shape="rect" coords="586,17,562,54" id="401.45" class="room"/>
            <area href="uh4/maps_uh401-46.php" shape="rect" coords="556,18,536,52" id="401.46" class="room"/>
            <area href="uh4/maps_uh401-47.php" shape="rect" coords="533,18,507,52" id="401.47" class="room"/>
            <area href="uh4/maps_uh401-48.php" shape="rect" coords="506,18,482,54" id="401.48" class="room"/>
            <area href="uh4/maps_uh401-49.php" shape="rect" coords="480,19,452,54" id="401.49" class="room"/>
            <area href="uh4/maps_uh403.php" shape="rect" coords="376,71,426,98" id="403" class="room"/>
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
