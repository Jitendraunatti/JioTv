<?php
error_reporting(0);
header("Content-Type: application/json");
include "jitendraunatti.php";
$Avengers_Assemble = doctor_strange()["meta_data"];
$SYLVIE = $_SERVER['REQUEST_URI'];
$THOR = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$JANE_FOSTER = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$DOCTOR_STRANGE = $NTR = $THOR . $JANE_FOSTER . $SYLVIE;
$CHRISTINE = $DOCTOR_STRANGE;
$DEVARA  = "http://localhost/jiotv-plus/live.php";
$WANDA = file_get_contents($Avengers_Assemble['play'][0]);
$DOCTOR_STRANGE = str_replace($DEVARA, "$DOCTOR_STRANGE", $WANDA);
$DOCTOR_STRANGE  = str_replace("playlist.php", "live.php", $DOCTOR_STRANGE);
echo $DOCTOR_STRANGE;
$ASUR = doctor_strange()["zee_api"];
$SPIDER_MAN = json_decode(file_get_contents($ASUR["web_api"]), true);
foreach ($SPIDER_MAN as $SCARLET_WITCH) {
    $jio_data .= '#EXTINF:-1 tvg-id="' . $SCARLET_WITCH["id"] . '" tvg-name="' . $SCARLET_WITCH["title"] . '" tvg-type="' . $SCARLET_WITCH["genres"] . '" group-title="' . $SCARLET_WITCH["genres"] . '" tvg-logo="' . $SCARLET_WITCH["logo"] . '",' . $SCARLET_WITCH["title"] . PHP_EOL;
    $jio_data .= str_replace("playlist", "live", $NTR)  . "?token=JITENDRA_KUMAR&id=" . $SCARLET_WITCH['link'] . PHP_EOL;
    $jio_data .= PHP_EOL;
}
echo $jio_data;
echo file_get_contents($Avengers_Assemble['play'][1]);
echo file_get_contents($Avengers_Assemble['play'][2]);
echo file_get_contents($Avengers_Assemble['play'][3]);
echo file_get_contents($Avengers_Assemble['play'][4]);
echo file_get_contents($Avengers_Assemble['play'][5]);
echo file_get_contents($Avengers_Assemble['play'][6]);
echo file_get_contents($Avengers_Assemble['play'][7]);
echo file_get_contents($Avengers_Assemble['play'][8]);
echo file_get_contents($Avengers_Assemble['play'][9]);
echo file_get_contents($Avengers_Assemble['play'][10]);
echo file_get_contents($Avengers_Assemble['play'][11]);
echo file_get_contents($Avengers_Assemble['play'][12]);
echo file_get_contents($Avengers_Assemble['play'][13]);
echo file_get_contents($Avengers_Assemble['play'][14]);
