
// Jquery Test Button
$(document).ready(function(){
    $("button").click(function(){
        $("p").text("Jquery Applied!");
    });
});

//Map High light
<!-- activate maphilight -->
$(function() {
    $('.map').maphilight({});
});

// Map mouse over
$(document).ready(function(){
  $("#uh047").mouseover(function() {
    //document.getElementById("tag").innerHTML = "TEST";

    //function display() {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("tag").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "/display.php?tag=1", true);
          xmlhttp.send();
    //    }
    })
})
