<?php

include "jio_creds.php";
error_reporting(0);
function badass($JITENDRA_PRO_DEV_URL){
$BLOODY_SWEET = jio_data();
$BLOODY_SWEET = json_decode($BLOODY_SWEET, true);
//=============================================================================//
//                      तो फिर से खून ही मांगेगी'
//                      TO PHIR SE KHOON HEE MAANGEGEE
//=============================================================================//
$ssoToken = $BLOODY_SWEET['ssoToken'];
$access_token = $BLOODY_SWEET['authToken'];
$subscriberId = $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'];
$uniqueId = $BLOODY_SWEET['sessionAttributes']['user']['unique'];
$user_id = $BLOODY_SWEET['sessionAttributes']['user']['uid'];
$device_id = $BLOODY_SWEET['deviceId'];
$analyticsId = $BLOODY_SWEET['analyticsId'];
$COOKIE = @$_REQUEST['ck'];
$id = @$_REQUEST['id'];
$COOKIES = str_replace(["PLUS", "EQUALS"], ["+", "="], $COOKIE);
$COOKIES = base64_decode(strrev($COOKIES));
    $JITENDRA_PRO_DEV_X_ROLEX = array(
    "userid: " . $user_id,
    "x-platform: android",
    "appname: RJIL_JioTV",
    "Cookie:" . $COOKIES,
    "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
    "appkey: NzNiMDhlYcQyNjJm",
    "channel_id: $id",
    "crmid: " . $subscriberId,
    "deviceId: " . $device_id,
    "devicetype: phone",
    "isott: true",
    "languageId: 6",
    "lbcookie: 1",
    "os: android",
    "osVersion: 13",
    "srno: 2406022755009",
    "ssotoken: " . $ssoToken,
    "subscriberId: " . $subscriberId,
    "uniqueId: " . $uniqueId,
    "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
    "usergroup: tvYR7NSNn7rymo3F",
    "versionCode: 353",
    "Origin: https://www.jiocinema.com",
    "Referer: https://www.jiocinema.com/",
     );
    $JITENDRA_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN, [
        CURLOPT_URL => $JITENDRA_PRO_DEV_URL,
        CURLOPT_HEADER => 0,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_ENCODING => "gzip",
        CURLOPT_FOLLOWLOCATION => 1,
    ]);
    $ASUR = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
            curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
            return $ASUR;
}


if (!empty($_REQUEST["key"]) && !empty($_REQUEST["ck"])) {
    $CACHE = str_replace("/", "_", $_REQUEST["key"]);
    if (!file_exists($CACHE)) {
        $JITENDRA_PRO_DEV_URL = 'https://tv.media.jio.com/streams_live/' . $_REQUEST["key"];
        $THANOS  = badass($JITENDRA_PRO_DEV_URL);
        }
        else
        {
            $THANOS = file_get_contents($CACHE);
        }
         echo $THANOS;
}

if (!empty($_REQUEST["pkey"]) && !empty($_REQUEST["ck"])) 
{
    $CACHE = str_replace("/", "_", $_REQUEST["pkey"]);
    if (!file_exists($CACHE)) {
        $JITENDRA_PRO_DEV_URL = 'https://tv.media.jio.com/fallback/bpk-tv/' . $_REQUEST["pkey"];
        $THANOS  = badass($JITENDRA_PRO_DEV_URL);
    }
        else
    {
            $THANOS = file_get_contents($CACHE);
    }
         echo $THANOS;

}
if (!empty($_REQUEST["ts"]) && !empty($_REQUEST["ck"])) {
    header("Content-Type: video/mp2t");
    header("Connection: keep-alive");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Expose-Headers: Content-Length,Content-Range");
    header("Access-Control-Allow-Headers: Range");
    header("Accept-Ranges: bytes");
    
    $JITENDRA_PRO_DEV_URL = 'https://jiotvmblive.cdn.jio.com/' . $_REQUEST["ts"];
    $THANOS = badass($JITENDRA_PRO_DEV_URL);
    echo $THANOS;

}
if (!empty($_REQUEST["tss"]) && !empty($_REQUEST["ck"])) {
    header("Content-Type: video/mp2t");
    header("Connection: keep-alive");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Expose-Headers: Content-Length,Content-Range");
    header("Access-Control-Allow-Headers: Range");
    header("Accept-Ranges: bytes");
    
    $JITENDRA_PRO_DEV_URL = $_REQUEST["tss"];
    $THANOS = badass($JITENDRA_PRO_DEV_URL);
    echo $THANOS;

}