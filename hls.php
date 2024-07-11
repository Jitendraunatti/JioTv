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
    $SYLVIE = file_get_contents("https://jiotvmblive.cdn.jio.com/bpk-tv/$CHANNELS/HLSPartner/$hls", false, $LOKI);
    $JITENDRA_PRO_DEV_X_SYLVIE = $SYLVIE;
    $SYLVIE = explode("\n",$SYLVIE);
    $JITENDRA_PRR_DEV_x_THANOS = explode("-",$SYLVIE[5]);
    $SYLVIE = explode("_",$SYLVIE[5]);
    $DEVARA = [
        "$SYLVIE[0]",
        "#EXTM3U",
        "$JITENDRA_PRR_DEV_x_THANOS[5]"
    ];
    $COOKIE = strrev(base64_encode($COOKIE));
    $COOKIE = str_replace("+", "PLUS", $COOKIE);
    $COOKIE = str_replace("=", "EQUALS", $COOKIE);
    eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $JITENDRA_PRO_DEV_X_SYLVIE);
    echo $JITENDRAUNATTI;
