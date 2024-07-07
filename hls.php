<?php
error_reporting(0);
include "jio_creds.php";
header("Content-Type: application/vnd.apple.mpegurl");
$id = $_GET['id'];
$BLOODY_SWEET = json_decode(jio_data(), true);
$analyticsId = $BLOODY_SWEET['analyticsId'];
$ssoToken = $BLOODY_SWEET['ssoToken'];
$access_token = $BLOODY_SWEET['authToken'];
$subscriberId = $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'];
$uniqueId = $BLOODY_SWEET['sessionAttributes']['user']['unique'];
$device_id = $BLOODY_SWEET['deviceId'];
$hls = @$_REQUEST["hls"];
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
                "userid: ril$subscriberId\r\n" .
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
    $SYLVIE = file_get_contents("https://jiotvmblive.cdn.jio.com/bpk-tv/$CHANNELS/HLSPartner/$hls", false, $LOKI);
    $JITENDRA_PRO_DEV_X_SYLVIE = $SYLVIE;
    $SYLVIE = explode("\n",$SYLVIE);
    $SYLVIE = explode("_",$SYLVIE[5]);
    $DEVARA = [
        "$SYLVIE[0]",
        "#EXTM3U",
    ];
    $COOKIE = strrev(base64_encode($COOKIE));
    $COOKIE = str_replace("+", "PLUS", $COOKIE);
    $COOKIE = str_replace("=", "EQUALS", $COOKIE);
    eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $JITENDRA_PRO_DEV_X_SYLVIE);
    echo $JITENDRAUNATTI;