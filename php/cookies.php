<?php
$sausainelioVardas = 'vartotojas';
$sausainelioReiksme = 'vardenis pavardenis';
setcookie($sausainelioVardas, $sausainelioReiksme , time() + (86400 * 30), '/');
?>