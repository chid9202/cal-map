<!DOCTYPE HTML>
<?php
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
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="map.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.maphilight.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>


  <HEAD>
  <BODY>
    <div id="left">
      <h1> hello</h1>
      <img src="./img/uh0-color.png" class="map" usemap="#uh0_map"/>
  			<map name="uh0_map">
  				<area href="lucky/number1" shape="poly" coords="393,396,492,398,492,441,486,443,487,489,394,488" id="uh047"/> <!--uh047-->
  				<area href="lucky/number2" shape="poly" coords="501,309,503,364,493,365,492,445,591,447,591,310" id="uh038"/><!--uh038-->
  				<area href="lucky/number3" shape="poly" coords="392,366,330,364,329,473,392,474" id="uh052"/><!--uh052-->
  				<area href="lucky/number4" shape="poly" coords="300,244,214,245,195,289,184,348,300,347" id="uh054"/><!--uh054-->
  				<area href="lucky/number5" shape="poly" coords="302,171,309,169,310,159,345,146,392,140,393,263,302,263"  id="uh055"/><!--uh055-->
  				<area href="lucky/number6" shape="poly" coords="394,138,394,306,494,307,494,137" id="uh043"/><!--uh043-->
  				<area href="lucky/number7" shape="poly" coords="488,449,591,450,593,503,490,502" id="uh037"/><!--uh037-->
  			</map>
    </div>
    <div id="right">
      <h1>Right pane</h1>
      <div id="db_info">
        <p>TAG: <span id="tag"></span></p>
      </div>
    </div>
  </BODY>
</HTML>
