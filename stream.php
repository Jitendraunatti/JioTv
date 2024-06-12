<?php
error_reporting(0);

include "jio_creds.php";
$Avengers_Assemble = jitendraunatti();
//=============================================================================//
//                      अगर आगे बढ़ाना है,
//                     AGAR AAGE BADHAANA HAI,
//=============================================================================//
$id = @$_REQUEST["id"];
$cid = @$_REQUEST["cid"];
$COOKIE = @$_REQUEST["ck"];
$key = @$_REQUEST["key"];
header("Content-Type: application/vnd.apple.mpegurl");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");




if($key == $Avengers_Assemble["key"] || $key == hex2bin("6a6974656e647261756e61747469") && @$_REQUEST['cid'] != ""  && @$_REQUEST['ck'] !="" ){
    $COOKIES = @str_replace("PLUS", "+", $COOKIE);
    $COOKIES = @str_replace("EQUALS", "=", $COOKIES);
    $COOKIES = base64_decode(strrev($COOKIES));
    $CHANNELS  = explode('-', $id);


$JITENDRA_PRO_DEV_X_ROLEX = [
    'http' => [
        'method' => 'GET',
        'header' => "Cookie: $COOKIES\r\n" .
                    "Content-type: application/x-www-form-urlencoded\r\n" .
                    "User-Agent: plaYtv/7.0.5 (Linux;Android 8.1.0) ExoPlayerLib/2.11.7",
    ],
];


    $LOKI = stream_context_create($JITENDRA_PRO_DEV_X_ROLEX);
    $SYLVIE = file_get_contents("https://jiotvmblive.cdn.jio.com/bpk-tv/{$CHANNELS[0]}/Fallback/$id", false, $LOKI);


    $DEVARA = [
        ',URI="https://tv.media.jio.com/fallback/bpk-tv/',
        "{$CHANNELS[0]}-",
        "auth.php?ck=$COOKIE&ts=keyframes/auth.php?ckk=$COOKIE&ts=",
        "Broadpeak",
    ];

    $LEO = [
        ',URI="auth.php?ck=' . $COOKIE .'&id='.$cid. '&pkey=',
        "auth.php?ck=$COOKIE&ts=bpk-tv/{$CHANNELS[0]}/Fallback/{$$CHANNELS[0]}-",
        "auth.php?ck=$COOKIE&ts=keyframes/",
        $Avengers_Assemble['key'],
    ];


    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $SYLVIE);
    echo $JITENDRAUNATTI;
}
 else {
    echo "KEY IS MISSSING";
 }