<?php

include_once ("lib/centaurosms.php");
$SMS = new CentauroSMS('codigo_credencial', 'codigo_secreto_credencial');
$SMS_disponibles = $SMS->get_sms_available();
echo json_encode($SMS_disponibles['response']['sms_disponibles']);

?>