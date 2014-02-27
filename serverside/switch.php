<?php
$path = "/var/www/apps.thacker.com.br/lab/imgs";
$status = $path . '/status.jpg';
$whitelist = array('aberto', 'fechado');
if (in_array($_GET["status"], $whitelist) {
    $file = $path . "/" . $_GET["status"] . ".jpg";
    copy($file,$status);
}
?>
