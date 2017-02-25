$(document).ready(function() {

  $("#Nuevo").click(function() {
    var dato = $("#licencias").val();
    var route = "http://localhost:8000/licencias";
    var token = $("#token").val();

$.ajax({
  url: route,
  type: 'POST',
  headers: {'X-CSRF-TOKEN': token},
  dataType: 'json',
  data:{NumeroLicencia: dato},

  success:function (res) {
    }
});
});
});
