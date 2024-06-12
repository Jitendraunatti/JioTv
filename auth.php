<?php

include "jio_creds.php";

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
    $JITENDRA_PRO_DEV_X_ROLEX = array();
    $JITENDRA_PRO_DEV_X_ROLEX[] = "userid: " . $user_id;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "x-platform: android";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "appname: RJIL_JioTV";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "Cookie:" . $COOKIES;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "accesstoken: " . jio_tv_re_use_refreshtoken_generate();
    $JITENDRA_PRO_DEV_X_ROLEX[] = "appkey: NzNiMDhlYcQyNjJm";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "channel_id: $id";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "crmid: " . $subscriberId;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "deviceId: " . $device_id;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "devicetype: phone";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "isott: true";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "languageId: 6";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "lbcookie: 1";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "os: android";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "osVersion: 13";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "srno: 2406022755009";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "ssotoken: " . $ssoToken;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "subscriberId: " . $subscriberId;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "uniqueId: " . $uniqueId;
    $JITENDRA_PRO_DEV_X_ROLEX[] = "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "usergroup: tvYR7NSNn7rymo3F";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "versionCode: 349";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "Origin: https://www.jiocinema.com";
    $JITENDRA_PRO_DEV_X_ROLEX[] = "Referer: https://www.jiocinema.com/";

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
