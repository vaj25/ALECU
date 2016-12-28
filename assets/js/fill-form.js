/*
* Los campos select_name y select_value son opcionales solo cuando haya
* algun select que haya que poner.
*/
function fill_form(name, value, select_name, select_value, atributo, textarea_name, textarea_value) {

    var defecto = false;
    var defecto1 = false;
    $.extend(defecto, select_name);
    $.extend(defecto, select_value);
    $.extend(defecto, atributo);
    $.extend(defecto, textarea_name);
    $.extend(defecto, textarea_value);

    for (var i = 0; i < name.length; i++) {
      $('input[name='+name[i]+']').val(value[i]);
    }

    if (select_name != false && select_value != false) {
      if (Array.isArray(select_name) && Array.isArray(select_value)) {
        for (var i = 0; i < select_name.length; i++) {
          $('select[name='+select_name[i]+'] > option').removeAttr('selected');
          $('select[name='+select_name[i]+'] > option[value='+select_value[i]+']').attr('selected', 'selected');
        }
      } else {
        $('select[name='+select_name+'] > option').removeAttr('selected');
        $('select[name='+select_name+'] > option[value='+select_value+']').attr('selected', 'selected');
      }
    }

    if (atributo) {
      if ((atributo.length % 3) == 0) {
        for (var i = 0; i < atributo.length; i=i+3) {
          $('input[name='+atributo[i]+']').attr(atributo[i+1] , atributo[i+2]);
        }
      }
    }

    if (textarea_name != false && textarea_value != false) {
      if (Array.isArray(textarea_name) && Array.isArray(textarea_value)) {
        for (var i = 0; i < textarea_name.length; i++) {
          $('textarea[name='+textarea_name[i]+']').val(textarea_value[i]);
        }
      } else {
        $('textarea[name='+textarea_name+']').val(textarea_value);
      }
    }

    $('html,body').animate({
      scrollTop: $('form').offset().top
    }, 700);
}
