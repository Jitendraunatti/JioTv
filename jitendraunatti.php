<?php
error_reporting(0);
include "jio_creds.php";
header("Content-Type: application/vnd.apple.mpegurl");
$id = @$_GET['id'];
$BLOODY_SWEET = json_decode(jio_data(), true);
$analyticsId = $BLOODY_SWEET['analyticsId'];
$ssoToken = $BLOODY_SWEET['ssoToken'];
$access_token = $BLOODY_SWEET['authToken'];
$subscriberId = $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'];
$uniqueId = $BLOODY_SWEET['sessionAttributes']['user']['unique'];
$device_id = $BLOODY_SWEET['deviceId'];
$hls = @$_REQUEST["ts"];
$COOKIE = @$_REQUEST["ck"];
$COOKIES = str_replace(["PLUS", "EQUALS"], ["+", "="], $COOKIE);
$COOKIE = base64_decode(strrev($COOKIES));
$CHANNELS = @$_REQUEST["cid"];

$JITENDRA_PRO_DEV_X_ROLEX = [
    'http' => [
    'method' => 'GET',
    'header' => "Cookie: $COOKIE\r\n" .
                "os: android\r\n" .
                "appname: RJIL_JioTV\r\n" .
                "subscriberid: $subscriberId\r\n" .
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate() . "\r\n" .
                "deviceid: $device_id\r\n" .
                 "userid: ril" . $subscriberId . "\r\n" .
                "versioncode: 353\r\n" .
                "devicetype: phone\r\n" .
                "crmid: $subscriberId\r\n" .
                "osversion: 13\r\n" .
                "srno: 240707471030\r\n" .
                "usergroup: tvYR7NSNn7rymo3F\r\n" .
                "x-platform: android\r\n" .
                "uniqueid: $uniqueId\r\n" .
                "ssotoken: $ssoToken\r\n" .
                "channelid: $id\r\n" .
                "priority: u=1, i\r\n" .
                "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
],

];


    $LOKI = stream_context_create($JITENDRA_PRO_DEV_X_ROLEX);

    $SYLVIE = file_get_contents("https://jiotvmblive.cdn.jio.com/$CHANNELS/$hls", false, $LOKI);
    $DEVARA = [
        "$CHANNELS",
        "#EXTM3U",
    ];
    $COOKIE = strrev(base64_encode($COOKIE));
    $COOKIE = str_replace("+", "PLUS", $COOKIE);
    $COOKIE = str_replace("=", "EQUALS", $COOKIE);

eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $SYLVIE);
    echo $JITENDRAUNATTI;
