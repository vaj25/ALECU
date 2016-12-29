/*
*
* attribute soporta: - disabled - readonly - enable(defecto)
* puede ser:
* string que se aplicara a todos los inputs
* array que se aplicaran en orden
* array asociativos indicando la llave el numero que le pertenece en el names
* false que aplicara input por defecto
*
*/
function fill_form(names, values, type, attribute) {

  //Parametros opcionales
  type = type || "input";
  attribute = attribute || "enable";

  if (Array.isArray(names) && Array.isArray(values)) {
    if (names.length > 0) {

      var types;
      var attributes
      //Trato paramatros opcionales
      if (Array.isArray(type)) {
        types = Array(names.length).fill('input');
        $.extend(types, type);
      } else {
        types = Array(names.length).fill(type);
      }

      if (Array.isArray(attribute)) {
        attributes = Array(names.length).fill('enable');
        $.extend(attributes, attribute);
      } else {
        attributes = Array(names.length).fill(attribute);
      }

      if (Array.isArray(types)) {
        for (var i = 0; i < names.length; i++) {
          switch (types[i]) {
            case 'input':
              $('input[name='+names[i]+']').val(values[i]);
              $('input[name='+names[i]+']').attr(attributes[i], "");
              break;
            case 'select':
              $('select[name='+names[i]+']').attr(attributes[i], "");
              $('select[name='+names[i]+'] > option').removeAttr('selected');
              $('select[name='+names[i]+'] > option[value='+values[i]+']').attr('selected', 'selected');
              break;
            case 'textarea':
              $('textarea[name='+names[i]+']').val(values[i]);
              $('textarea[name='+names[i]+']').attr(attributes[i], "");
              break;
            default:
              $('input[name='+names[i]+']').val(values[i]);
              $('input[name='+names[i]+']').attr(attributes[i], "");
          }
        }
      }
    }
  } else {

    switch (type) {
      case 'input':
        $('input[name='+names+']').val(values);
        $('input[name='+names+']').attr(attribute, "");
        break;
      case 'select':
        $('select[name='+names+']').attr(attribute, "");
        $('select[name='+names+'] > option').removeAttr('selected');
        $('select[name='+names+'] > option[value='+values+']').attr('selected', 'selected');
        break;
      case 'textarea':
        $('textarea[name='+names+']').val(values);
        $('textarea[name='+names+']').attr(attribute, "");
        break;
      default:
        $('input[name='+names+']').val(values);
        $('input[name='+names+']').attr(attribute, "");
    }
  }

  $('html,body').animate({
    scrollTop: $('form').offset().top
  }, 700);
}
