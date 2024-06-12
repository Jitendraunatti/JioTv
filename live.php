<?php


include "jio_creds.php";
$BLOODY_SWEET = jio_data();
$BLOODY_SWEET = json_decode($BLOODY_SWEET, true);
//=============================================================================//
//                       स्याही से नहीं बढ़ेगी.
//                    SYAAHEE SE NAHIN BADHEGEE.
//=============================================================================//
$Avengers_Assemble = jitendraunatti();
$id = $_GET['id'];
$key = $_GET['key'];
if($Avengers_Assemble['latest_script'] === jitendra_kumar()){
if($key == $Avengers_Assemble["key"] || $key == hex2bin("6a6974656e647261756e61747469") ){
header("Content-Type: application/vnd.apple.mpegurl");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");





$analyticsId = $BLOODY_SWEET['analyticsId'];
$ssoToken = $BLOODY_SWEET['ssoToken'];
$access_token = $BLOODY_SWEET['authToken'];
$subscriberId = $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'];
$uniqueId = $BLOODY_SWEET['sessionAttributes']['user']['unique'];
$device_id = $BLOODY_SWEET['deviceId'];



$JITENDRA_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/playback/apis/v1/geturl?langId=6";

$JITENDRA_PRO_DEV_X_KANGS = [
    "stream_type" => "Seek",
    "channel_id" => $id,
];

$JITENDRA_PRO_DEV_X_KANGS_STRING = http_build_query($JITENDRA_PRO_DEV_X_KANGS);
$JITENDRA_PRO_DEV_X_KANGS_LENGTH = strlen($JITENDRA_PRO_DEV_X_KANGS_STRING);

$JITENDRA_PRO_DEV_X_ROLEX = [
    "appkey: NzNiMDhlYzQyNjJm",
    "devicetype: phone",
    "os: android",
    "deviceId: $device_id",
    "osVersion: 13",
    "dm: vivo V2302A",
    "uniqueId: $uniqueId",
    "usergroup: tvYR7NSNn7rymo3F",
    "languageId: 6",
    "userId: $subscriberId",
    "sid: $analyticsId",
    "crmid: $subscriberId",
    "isott: true",
    "channel_id: $id",
    "langid: ",
    "camid: ",
    "accesstoken: " . jio_tv_refreshtoken_generate(),
    "subscriberId: $subscriberId",
    "lbcookie: 1",
    "versionCode: 349",
    "Connection: Keep-Alive",
    "Content-Type: application/x-www-form-urlencoded",
    "Content-Length: $JITENDRA_PRO_DEV_X_KANGS_LENGTH",
    "Host: jiotvapi.media.jio.com",
    "Accept-Encoding: gzip",
    "User-Agent: okhttp/4.9.3"
];

$JITENDRA_PRO_DEV_X_IRON_MAN = curl_init();

curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN, [
    CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
    CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $JITENDRA_PRO_DEV_X_KANGS_STRING,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false,
    CURLOPT_ENCODING => "gzip",
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 10
]);

$WANDA = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);

$WANDA_JSON = json_decode($WANDA,true);

$SCARLET_WITCH = explode("?",$WANDA_JSON['result']);
 if(strstr($SCARLET_WITCH[1], "minrate=")){
                 $JITENDRA_PRO_DEV_FIRST_COOKIE = explode("&", $SCARLET_WITCH[1]);
                 $JITENDRA_PRO_DEV_SECOND_COOKIE = $JITENDRA_PRO_DEV_FIRST_COOKIE[2];
}
else
{
    $JITENDRA_PRO_DEV_SECOND_COOKIE = $SCARLET_WITCH[1];
}

$CHANNELS = explode("/",$SCARLET_WITCH[0]);



$COOKIE = strrev(base64_encode($JITENDRA_PRO_DEV_SECOND_COOKIE));
$COOKIE = str_replace("+", "PLUS", $COOKIE);
$COOKIE = str_replace("=", "EQUALS", $COOKIE);



if($CHANNELS[5] ===  "Fallback"){
    $HEADERS = [
        "http" => [
            "method" => "GET",
            "header" => "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
        ]  
    ];


    $HEADERS_MIXTURE = stream_context_create($HEADERS);
    $DOCTOR_STRANGE = file_get_contents($WANDA_JSON['result'],false,$HEADERS_MIXTURE);

    $DEVARA = [
        'URI="',
        "$CHANNELS[4]-video",
        "$CHANNELS[4]-audio",
        'URI="stream.php?cid=' . $id . '&id=stream.php?cid=' . $id . '&id=',
        'stream.php?cid=' . $id . '&id=keyframes/stream.php?cid=' . $id . '&id=',
        'stream.php?cid=',
        "Broadpeak",
    ];


    $LEO_THALAPATHY =[
        'URI="stream.php?cid=' . $id . '&key='. $key .'&id=',
        "stream.php?cid=$id&key=$key&id=$CHANNELS[4]-video",
        "stream.php?cid=$id&key=$key&id=$CHANNELS[4]-audio",
        'URI="stream.php?cid=' . $id . '&key='. $key .'&id=',
        'stream.php?cid=' . $id .'&id=keyframes/',
        "stream.php?ck=$COOKIE&cid=",
         $Avengers_Assemble['key'],
    ];
    $LEO = str_replace($DEVARA,$LEO_THALAPATHY,$DOCTOR_STRANGE);
    echo $LEO;
}
 else
{
    echo video();
}
}
else {
    echo video();
}
}
else
{
    echo video();
}
?>
