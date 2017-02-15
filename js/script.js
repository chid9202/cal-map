$(document).ready(function(){
  $('.map').maphilight({});

  $('.room').mouseover(function() {
      display(this.id);
      console.log(this.id);
    })
})

function display(id) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("tag").innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "/display.php?room="+id, true);
      xmlhttp.send();
  }
