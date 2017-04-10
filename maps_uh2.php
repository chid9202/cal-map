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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.maphilight.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script>
      activate_bar("bar_uh2");
    </script>
  <HEAD>
  <BODY>
    <div class="row">
      <div class="col col-sm-8">
        <img src="./img/uh2.jpg" class="map" usemap="#uh2_map"/>
    			<map name="uh2_map">
            <area href="maps_uh201-01.php" shape="rect" coords="381,701,355,745" />
            <area href="maps_uh201-02.php" shape="rect" coords="354,701,324,747" />
            <area href="maps_uh201-03.php" shape="rect" coords="324,702,296,746" />
            <area href="maps_uh201-04.php" shape="rect" coords="295,702,266,747" />
            <area href="maps_uh201-05.php" shape="rect" coords="264,703,236,746" />
            <area href="maps_uh201-06.php" shape="rect" coords="236,704,209,747" />
            <area href="maps_uh201-07.php" shape="rect" coords="206,701,179,746" />
            <area href="maps_uh201-08.php" shape="rect" coords="178,699,149,746" />
            <area href="maps_uh201-09.php" shape="rect" coords="148,701,123,744" />
            <area alt="" title="" href="#" shape="rect" coords="122,701,93,745" />
            <area alt="" title="" href="#" shape="rect" coords="90,702,63,744" />
            <area alt="" title="" href="#" shape="rect" coords="62,702,35,746" />
            <area alt="" title="" href="#" shape="rect" coords="34,771,61,814" />
            <area alt="" title="" href="#" shape="rect" coords="62,773,90,815" />
            <area alt="" title="" href="#" shape="rect" coords="92,771,119,816" />
            <area alt="" title="" href="#" shape="rect" coords="120,771,148,816" />
            <area alt="" title="" href="#" shape="rect" coords="150,769,178,815" />
            <area alt="" title="" href="#" shape="rect" coords="178,769,207,815" />
            <area alt="" title="" href="#" shape="rect" coords="208,769,236,814" />
            <area alt="" title="" href="#" shape="rect" coords="238,769,266,816" />
            <area alt="" title="" href="#" shape="rect" coords="268,771,294,816" />
            <area alt="" title="" href="#" shape="rect" coords="296,772,324,816" />
            <area alt="" title="" href="#" shape="rect" coords="326,772,354,816" />
            <area alt="" title="" href="#" shape="rect" coords="356,772,382,813" />
            <area alt="" title="" href="#" shape="rect" coords="442,772,470,816" />
            <area alt="" title="" href="#" shape="rect" coords="469,771,498,815" />
            <area alt="" title="" href="#" shape="rect" coords="502,771,528,814" />
            <area alt="" title="" href="#" shape="rect" coords="530,772,557,815" />
            <area alt="" title="" href="#" shape="rect" coords="558,770,588,815" />
            <area alt="" title="" href="#" shape="rect" coords="588,768,616,815" />
            <area alt="" title="" href="#" shape="rect" coords="616,768,646,816" />
            <area alt="" title="" href="#" shape="rect" coords="648,771,672,816" />
            <area alt="" title="" href="#" shape="rect" coords="674,769,702,815" />
            <area alt="" title="" href="#" shape="rect" coords="706,771,732,815" />
            <area alt="" title="" href="#" shape="rect" coords="734,771,762,814" />
            <area alt="" title="" href="#" shape="rect" coords="764,770,792,815" />
            <area alt="" title="" href="#" shape="rect" coords="794,771,818,816" />
            <area alt="" title="" href="#" shape="rect" coords="818,706,793,746" />
            <area alt="" title="" href="#" shape="rect" coords="790,706,764,746" />
            <area alt="" title="" href="#" shape="rect" coords="762,706,732,748" />
            <area alt="" title="" href="#" shape="rect" coords="732,703,703,749" />
            <area alt="" title="" href="#" shape="rect" coords="702,703,675,748" />
            <area alt="" title="" href="#" shape="rect" coords="674,703,646,746" />
            <area alt="" title="" href="#" shape="rect" coords="641,702,618,748" />
            <area alt="" title="" href="#" shape="rect" coords="616,704,586,747" />
            <area alt="" title="" href="#" shape="rect" coords="584,703,559,747" />
            <area alt="" title="" href="#" shape="rect" coords="556,705,529,747" />
            <area alt="" title="" href="#" shape="rect" coords="526,706,503,745" />
            <area alt="" title="" href="#" shape="rect" coords="498,705,472,749" />
            <area alt="" title="" href="#" shape="rect" coords="386,769,438,812" />
            <area alt="" title="" href="#" shape="rect" coords="410,368,506,426" />
            <area alt="" title="" href="#" shape="rect" coords="525,415,560,445" />
            <area alt="" title="" href="#" shape="rect" coords="524,374,562,410" />
            <area alt="" title="" href="#" shape="poly" coords="530,306,562,305,562,373,524,369,522,317,526,318" />
            <area alt="" title="" href="#" shape="rect" coords="532,255,560,300" />
            <area alt="" title="" href="#" shape="rect" coords="526,198,562,248" />
            <area alt="" title="" href="#" shape="rect" coords="489,216,522,245" />
            <area alt="" title="" href="#" shape="poly" coords="411,254,436,253,438,296,490,300,490,315,449,318,446,327,412,323" />
            <area alt="" title="" href="#" shape="rect" coords="439,251,466,296" />
            <area alt="" title="" href="#" shape="rect" coords="470,250,509,292" />
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
