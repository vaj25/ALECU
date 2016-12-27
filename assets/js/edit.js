$(".close").click(function(){
    $("#myAlert").slideUp();
});

setInterval(function() {
    $("#myAlert").slideUp();
}, 5000);

$("#edit-nombre").click(function() {
  $("#nombre-usuario").removeAttr("disabled");
  $("#tipo").val("nombre");
});

$("#edit-pass").click(function() {
  $("#edit-pass").hide();
  $("#pass-usuario").removeAttr("disabled");
  $("#pass_conf").html('<label>Nueva Password:</label><input type="password" id="pass-usuario" name="pass" class="form-control" required="required" placeholder="Nueva Contraseña">');
  $("#pass-usuario").val("");
  $("#tipo").val("pass");
});
