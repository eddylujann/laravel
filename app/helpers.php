<?php

// CUANDO SE CREA ESTE FICHERO "helpers.php" ES NECESARIO AGREGARLO EN EL FICHERO "composer.json" Y DECIRLO QUE LO CARGUE EN LA SESSION "autoload"
// DE ESTA FORMA -> "files" : ["app/helpers.php"]
// LUEGO EJECUTAR EL COMANDO -> composer dumpautoload
function setActive( $routeName ) {
    return  request()->routeIs( $routeName ) ? 'active' : '';
}