<?php

  /*
  * ########################################
  * Este solo recibe 2 tipos de variables
  * alert: que desplegara dependiendo de cual
  * se le indique.
  * controller: la cual se activara dependiendo
  * del controlador que se le mande esta es opcional.
  * La unica variable a retornara sera mensaje
  * la cual advertira de algun error.
  *#########################################
  */

$anuncio = "";

if (isset($alert)) {
  if ($alert != "" && !is_numeric($alert)) {
    /*
    * Aqui se pueden ubicar todos los controller que fuesen
    * necesarios.
    */
    if (isset($controller)) {
      switch ($controller) {
        case 'login':
          switch ($alert) {
            case 'cerrar':
              $mensaje = "Ha cerrado sesión con exito.";
              break;
            case 'error_autenticar':
              $mensaje = "Lo sentimos. Las credenciales son erroneas.";
              $tipo = 'danger';
              break;
            case 'error_no_autenticado':
              $mensaje = "Lo sentimos. Aun no ha iniciado sesión.";
              $tipo = 'danger';
              break;
            default:
            $mensaje = $alert;
              break;
          }
          break;
        case 'area':
          switch ($alert) {
            case 'delete':
              $mensaje = "Se ha eliminado el area correctamente.";
              break;
            case 'update':
              $mensaje = "Se ha actualizado el area correctamente.";
              break;
            case 'insert':
              $mensaje = "Se ha insertado el area correctamente.";
              break;
            default:
            $mensaje = $alert;
              break;
          }
          break;
        default:
          break;
      }
    } else {
      switch ($alert) {
        case 'update':
          $mensaje = "Cambio efectuado satisfactoriamente.";
          break;
        case 'error_autenticar':
          $mensaje = "Lo sentimos. Las credenciales son erroneas.";
          $tipo = 'danger';
          break;
        case 'error_no_autenticado':
          $mensaje = "Lo sentimos. Aun no ha iniciado sesión.";
          $tipo = 'danger';
          break;
        default:
        $mensaje = $alert;
          break;
      }
    }

    if (!isset($tipo)) {
      $tipo = 'info';
    }

    $anuncio = '<div class="content_alert"><div class="alert alert-'.$tipo.'" id="myAlert"><a class="close">&times;</a>
                <strong>'. $mensaje .'</strong></div></div>';

  } else {
    return;
  }
}

echo $anuncio;
?>
