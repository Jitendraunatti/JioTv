<?php
error_reporting(0);
include "jio_creds.php";
$wanda  = @$_GET["id"];
$vision = Scarlet_Witch($wanda);
if (isset($vision["js"]["cmd"])) {
    $d7 = $vision["js"]["cmd"];
    header("Location: " . $d7);
    die;
}
