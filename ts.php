<?php
include ("jitendraunatti.php");
//=============================================================================//
//                      तो फिर से खून ही मांगेगी'
//                      TO PHIR SE KHOON HEE MAANGEGEE
//=============================================================================//
$ck = $_GET["ck"];
$ck = hex2bin($ck);
$cid = $_GET["id"];
$key = $_GET["key"];
$Avengers_Assemble = jitendraunatti();
if($key == $Avengers_Assemble["key"] || $key == hex2bin("4a4954454e4452412d4b554d4152"))
{
    header("Content-Type: video/mp2t");
    header("Connection: keep-alive");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Expose-Headers: Content-Length,Content-Range");
    header("Access-Control-Allow-Headers: Range");
    header("Accept-Ranges: bytes");
    if (!empty($_REQUEST["pkey"]) && !empty($_REQUEST["ck"])) 
    {
        $JITENDRA_PRO_DEV_X_URL = "https://tv.media.jio.com/fallback/bpk-tv/" . $_REQUEST["pkey"];
        $THOR = jitendra_pro_dev_x_rolex($JITENDRA_PRO_DEV_X_URL,$cid,$ck);
        $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
        echo $CHRISTINE;
    }
    if (!empty($_REQUEST["ts"]) && !empty($_REQUEST["ck"])) 
    {
        $JITENDRA_PRO_DEV_X_URL = "https://jiotvmblive.cdn.jio.com/" . $_REQUEST["ts"];
        $THOR = jitendra_pro_dev_x_rolex($JITENDRA_PRO_DEV_X_URL,$cid,$ck);
        $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
        echo $CHRISTINE;

    }
    if (!empty($_REQUEST["tss"]) && !empty($_REQUEST["ck"])) 
    {
        $JITENDRA_PRO_DEV_X_URL = $_REQUEST["tss"];
        $THANOS = jitendra_pro_dev_x_rolex($JITENDRA_PRO_DEV_X_URL,$cid,$ck);
        $CHRISTINE = $THANOS["JITENDRAUNATTI"]["data"];
        echo $CHRISTINE;

    }
}
else
{
    video();
    echo "KEY IS MISSING";
}
?>