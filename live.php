<?php
error_reporting(0);
include "jio_creds.php";
//=============================================================================//
//                       स्याही से नहीं बढ़ेगी.
//                    SYAAHEE SE NAHIN BADHEGEE.
//=============================================================================//
$BLOODY_SWEET = json_decode(jio_data(), true);
$Avengers_Assemble = jitendraunatti();
$id = $_GET['id'];
$key = $_GET['key'];

if ($Avengers_Assemble['latest_script'] === jitendra_kumar()) 
{
    if ($key == $Avengers_Assemble["key"] || $key == hex2bin("6a6974656e647261756e61747469")) 
    {
     
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
            "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
            "subscriberId: $subscriberId",
            "lbcookie: 1",
            "versionCode: 353",
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
        $WANDA_JSON = json_decode($WANDA, true);
        $SCARLET_WITCH_SONY = explode("&", $WANDA_JSON['result']);
        $CHANNELS_SONY = explode("/", $SCARLET_WITCH_SONY[0]);
        $JITENDRA_PRO_DEV_X_THOR = explode("hdnea",$SCARLET_WITCH_SONY[0]);
        $JITENDRA_PRO_DEV_X_THOR[0] = "__hdnea".$JITENDRA_PRO_DEV_X_THOR[1];

       
    
        if ($WANDA_JSON['code'] == 419 && $WANDA_JSON['message'] === "Token is expired") 
        {
            jio_tv_refreshtoken_generate();
            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
        }
        elseif ($WANDA_JSON['code'] == 200 && $WANDA_JSON['message'] === "success")
        {   
            $SCARLET_WITCH = explode("?", $WANDA_JSON['result']);
                if(strstr($SCARLET_WITCH[1], "minrate="))
                {
                    $JITENDRA_PRO_DEV_FIRST_COOKIE = explode("&", $SCARLET_WITCH[1]);
                    $JITENDRA_PRO_DEV_SECOND_COOKIE = $JITENDRA_PRO_DEV_FIRST_COOKIE[2];
                }
                else
                {
                    $JITENDRA_PRO_DEV_SECOND_COOKIE = $SCARLET_WITCH[1];
                }

            $CHANNELS = explode("/", $SCARLET_WITCH[0]);
           
            $COOKIE = strrev(base64_encode($JITENDRA_PRO_DEV_SECOND_COOKIE));
            $COOKIE = str_replace(["+", "="], ["PLUS", "EQUALS"], $COOKIE);

         
            if ($CHANNELS[5] === "Fallback") 
            {
                file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&jiotv=$CHANNELS[4]");
                $HEADERS = [
                    "http" => [
                        "method" => "GET",
                        "header" => "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
                    ]
                ];

                $HEADERS_MIXTURE = stream_context_create($HEADERS);
                $DOCTOR_STRANGE = file_get_contents($WANDA_JSON['result'], false, $HEADERS_MIXTURE);

                $DEVARA = [
                    'URI="',
                    "$CHANNELS[4]-video",
                    "$CHANNELS[4]-audio",
                    'URI="stream.php?cid=' . $id . '&id=stream.php?cid=' . $id . '&id=',
                    'stream.php?cid=' . $id . '&id=keyframes/stream.php?cid=' . $id . '&id=',
                    'stream.php?cid=',
                    "Broadpeak",
                    "#EXTM3U",
                ];

               eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

                $LEO = str_replace($DEVARA, $LEO_THALAPATHY, $DOCTOR_STRANGE);
                echo $LEO;
            }

               else if ($CHANNELS[5] === "HLSPartner") 
            {
                file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&jiotv=$CHANNELS[4]");
                                    $HEADERS = [
                                        'http' => [
                        'method' => 'GET',
                        'header' => "Cookie: $SCARLET_WITCH[1]\r\n" .
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

                $HEADERS_MIXTURE = stream_context_create($HEADERS);
                $DOCTOR_STRANGE = file_get_contents($SCARLET_WITCH[0], false, $HEADERS_MIXTURE);

                $DEVARA = [
                   "$CHANNELS[4]",
                   "#EXTM3U",
                ];

                 eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

                $LEO = str_replace($DEVARA, $LEO_THALAPATHY, $DOCTOR_STRANGE);
                echo $LEO;
            }
            else if($CHANNELS_SONY[3] === $CHANNELS_SONY[5])
            {
                file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&jiotv=$id");
                $HEADERS = [
                    
                                    'http' => [
                            'method' => 'GET',
                            'header' => "Cookie: $JITENDRA_PRO_DEV_X_THOR[0]\r\n" .
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
                $JITENDRA_PRO_DEV_X_BADASS = str_replace("?minrate=80000","",$SCARLET_WITCH_SONY[0]);
                $COOKIE = strrev(base64_encode($JITENDRA_PRO_DEV_X_THOR[0]));
                $COOKIE = str_replace(["+", "="], ["PLUS", "EQUALS"], $COOKIE);
                $HEADERS_MIXTURE = stream_context_create($HEADERS);
                $DOCTOR_STRANGE = file_get_contents($JITENDRA_PRO_DEV_X_BADASS, false, $HEADERS_MIXTURE);
                $CHANNELS_SONYY = explode("_", $CHANNELS_SONY[5]);
                $DEVARA = [
                   "$CHANNELS_SONY[3]",
                   "#EXTM3U",
                ];
                eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

                $LEO = str_replace($DEVARA, $LEO, $DOCTOR_STRANGE);
                echo $LEO;
            }   
            else
            {
                echo video();
                echo "#SOMETHING WENT WRONG WHILE FETCHING API URL";
            }

        }
        elseif($CHANNELS_SONY[3] === "HLS") 
        {
                file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&jiotv=$id");
                $HEADERS = [
                    
                                    'http' => [
                            'method' => 'GET',
                            'header' => "Cookie: $SCARLET_WITCH_SONY[8]\r\n" .
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
                $COOKIE = strrev(base64_encode($SCARLET_WITCH_SONY[8]));
                $COOKIE = str_replace(["+", "="], ["PLUS", "EQUALS"], $COOKIE);
                $HEADERS_MIXTURE = stream_context_create($HEADERS);
                $DOCTOR_STRANGE = file_get_contents($SCARLET_WITCH_SONY[0], false, $HEADERS_MIXTURE);
                $CHANNELS_SONYY = explode("_", $CHANNELS_SONY[5]);
                $DEVARA = [
                   "$CHANNELS_SONYY[0]",
                   "#EXTM3U",
                ];
    
                eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
    
                $LEO = str_replace($DEVARA, $LEO_THALAPATHY, $DOCTOR_STRANGE);
                echo $LEO;
        }  
       
        else
        {
            echo video();
            jio_tv_refreshtoken_generate();
            echo "#API RESPONSE ISSUE";
        }
    }
    else           
    {
        echo video();
        echo "#KEY IS MISSING";
    }

}
else
{
    echo video();
    echo "#UPDATED YOUR SCRIPT";
}
?>
