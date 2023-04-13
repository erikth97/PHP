<?php
//Parametros predeterminados de PHP
function nombres ($n11,$n12,$predeterminado = " " ){
      return $n11.$predeterminado.$n12;
}
$mensaje = nombres(n11:"victor",n12:"cruz", predeterminado:" = " );
echo $mensaje;
?>
