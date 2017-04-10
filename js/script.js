$(document).ready(function(){
  $('.map').maphilight({});

  $('.room').mouseover(function() {
      //display(this.id);
      console.log(this.id);
      if( $.fn.dataTable.isDataTable( '#data_table' )) {
        //$('#data_table').DataTable().clear().destory();
        $('#data_table').DataTable().clear().destroy();

      }

      var table = $('#data_table').dataTable({
        "destory": true,
        "paging": false,
        "searching": false,
        "bProcessing": true,
        "sAjaxSource": "display.php?room=" + this.id,
        "aoColumns": [
          { mData: 'Tag' } ,
          { mData: 'Hostname' }
        ]
      });

  });
});

function display(id) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tag").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "/display.php?room="+id, true);
  xmlhttp.send();
};

function activate_bar(id) {
  var f = document.getElementById(id);
  f.className += "active";
};
