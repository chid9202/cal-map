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
      activate_bar("bar_uh3");
    </script>
  <HEAD>
  <BODY>
    <div class="row">
      <div class="col col-sm-8">
        <img src="./img/uh3.jpg" class="map" usemap="#uh3_map"/>
    			<map name="uh3_map">
            <area alt="" title="" href="#" shape="rect" coords="380,699,355,743" />
            <area alt="" title="" href="#" shape="rect" coords="352,700,325,745" />
            <area alt="" title="" href="#" shape="rect" coords="323,699,296,747" />
            <area alt="" title="" href="#" shape="rect" coords="294,703,268,745" />
            <area alt="" title="" href="#" shape="rect" coords="264,701,37,745,240,743" />
            <area alt="" title="" href="#" shape="rect" coords="235,701,211,747" />
            <area alt="" title="" href="#" shape="rect" coords="207,699,181,747" />
            <area alt="" title="" href="#" shape="rect" coords="178,699,151,745" />
            <area alt="" title="" href="#" shape="rect" coords="148,701,124,747" />
            <area alt="" title="" href="#" shape="rect" coords="120,700,93,745" />
            <area alt="" title="" href="#" shape="rect" coords="89,699,65,745" />
            <area alt="" title="" href="#" shape="rect" coords="64,701" />
            <area alt="" title="" href="#" shape="rect" coords="36,768,61,813" />
            <area alt="" title="" href="#" shape="rect" coords="63,769,89,813" />
            <area alt="" title="" href="#" shape="rect" coords="93,769,120,813" />
            <area alt="" title="" href="#" shape="rect" coords="124,769,150,815" />
            <area alt="" title="" href="#" shape="rect" coords="149,768,177,813" />
            <area alt="" title="" href="#" shape="rect" coords="180,769,206,813" />
            <area alt="" title="" href="#" shape="rect" coords="208,769,236,811" />
            <area alt="" title="" href="#" shape="rect" coords="239,768,264,811" />
            <area alt="" title="" href="#" shape="rect" coords="266,769,296,809" />
            <area alt="" title="" href="#" shape="rect" coords="296,769,325,812" />
            <area alt="" title="" href="#" shape="rect" coords="324,769,354,811" />
            <area alt="" title="" href="#" shape="rect" coords="356,767,381,813" />
            <area alt="" title="" href="#" shape="rect" coords="443,768,470,813" />
            <area alt="" title="" href="#" shape="rect" coords="471,770,498,813" />
            <area alt="" title="" href="#" shape="rect" coords="500,767,528,813" />
            <area alt="" title="" href="#" shape="rect" coords="530,769,558,813" />
            <area alt="" title="" href="#" shape="rect" coords="559,771,585,813" />
            <area alt="" title="" href="#" shape="rect" coords="588,767,614,811" />
            <area alt="" title="" href="#" shape="rect" coords="616,768,646,813" />
            <area alt="" title="" href="#" shape="rect" coords="647,768,673,813" />
            <area alt="" title="" href="#" shape="rect" coords="675,767,703,815" />
            <area alt="" title="" href="#" shape="rect" coords="705,769,730,813" />
            <area alt="" title="" href="#" shape="rect" coords="734,767,760,811" />
            <area alt="" title="" href="#" shape="rect" coords="760,767,790,815" />
            <area alt="" title="" href="#" shape="rect" coords="791,766,817,811" />
            <area alt="" title="" href="#" shape="rect" coords="816,701,792,747" />
            <area alt="" title="" href="#" shape="rect" coords="789,702,761,745" />
            <area alt="" title="" href="#" shape="rect" coords="759,701,733,747" />
            <area alt="" title="" href="#" shape="rect" coords="731,701,702,748" />
            <area alt="" title="" href="#" shape="rect" coords="702,701,673,745" />
            <area alt="" title="" href="#" shape="rect" coords="672,701,646,745" />
            <area alt="" title="" href="#" shape="rect" coords="645,700,616,745" />
            <area alt="" title="" href="#" shape="rect" coords="614,699,587,749" />
            <area alt="" title="" href="#" shape="rect" coords="586,701,557,747" />
            <area alt="" title="" href="#" shape="rect" coords="556,701,529,745" />
            <area alt="" title="" href="#" shape="rect" coords="527,704,502,746" />
            <area alt="" title="" href="#" shape="rect" coords="498,701,472,745" />
            <area alt="" title="" href="#" shape="rect" coords="440,770,386,812" />
            <area alt="" title="" href="#" shape="poly" coords="446,298,508,296,509,384,475,386,474,342,410,342,410,324,445,322" />
            <area alt="" title="" href="#" shape="rect" coords="510,335,559,367" />
            <area alt="" title="" href="#" shape="rect" coords="511,370,560,402" />
            <area alt="" title="" href="#" shape="poly" coords="444,391,509,388,513,440,502,458,503,481,466,480,465,426,411,428,413,406,446,406" />
            <area alt="" title="" href="#" shape="rect" coords="562,440,511,406" />
            <area alt="" title="" href="#" shape="poly" coords="563,479,507,480,505,460,514,445,563,442" />
    			</map>
      </div>
      <div class="col col-sm-4">
        <div id="db_info">
          <p id="tag"></p>
        </div>
      </div>
    </div>
  </BODY>
</HTML>
