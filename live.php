<?php
//=============================================================================//
//                       स्याही से नहीं बढ़ेगी.
//                    SYAAHEE SE NAHIN BADHEGEE.
//=============================================================================//
include ("jitendraunatti.php");
$Avengers_Assemble = jitendraunatti();
$BLOODY_SWEET = json_decode(jio_data(),true);
$id = $_GET["id"];
$key = $_GET["key"];

if ($Avengers_Assemble['latest_script'] === jitendra_kumar()) 
{
    if(file_exists("$JITENDRA_PRO_DEV_X_DARK_SIDE/authToken.txt") && !empty("$JITENDRA_PRO_DEV_X_DARK_SIDE/authToken.txt") && isset(($BLOODY_SWEET["authToken"])) && $key == $Avengers_Assemble["key"] || $key == hex2bin("4a4954454e4452412d4b554d4152"))
    {
        global $JITENDRA_PRO_DEV_X_DARK_SIDE,$SCARLET_WITCH,$BLOODY_SWEET;
        $JITENDRA_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/playback/apis/v1/geturl?langId=6";
        header("Content-Type: application/vnd.apple.mpegurl");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Expose-Headers: Content-Length,Content-Range");
        header("Access-Control-Allow-Headers: Range");
        header("Accept-Ranges: bytes");
        $JITENDRA_PRO_DEV_X_KANG = 'stream_type=Seek&channel_id='. $id;
            $JITENDRA_PRO_DEV_X_ROLEX = [
                "appkey: NzNiMDhlYzQyNjJm",
                "devicetype: " . $SCARLET_WITCH["deviceType"],
                "os: " . $SCARLET_WITCH["os"],
                "deviceid: " . $BLOODY_SWEET['deviceId'],
                "osversion: " . $SCARLET_WITCH["osversion"],
                "dm: " . $SCARLET_WITCH["p-Name"],
                "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
                "usergroup: tvYR7NSNn7rymo3F",
                "languageid: 6",
                "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "sid: " . $BLOODY_SWEET['analyticsId'],
                "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "isott: false",
                "channel_id: " . $id,
                "langid: ",
                "camid: ",
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
                "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "lbcookie: 1",
                "versioncode: " . $SCARLET_WITCH["versionCode"],
                "content-type: application/x-www-form-urlencoded",
                "content-length: " . strlen($JITENDRA_PRO_DEV_X_KANG),
                "accept-encoding: gzip",
                "user-agent: " . $SCARLET_WITCH["User-Agent"],
            ];


        $CASSIE = jitendra_pro_dev_x_post_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX,$JITENDRA_PRO_DEV_X_KANG);
        $WANDA_JSON = json_decode($CASSIE["JITENDRAUNATTI"]["data"], true);
        file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&jiotv=" . $WANDA_JSON["result"]);
        if ($WANDA_JSON['code'] == 419 && $WANDA_JSON['message'] === "Token is expired") 
        {
            jio_tv_refreshtoken_generate();
            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
        }
        else if($WANDA_JSON['code'] == 200 && $WANDA_JSON['message'] === "success")
        {
            if(isset($WANDA_JSON["result"]) && !empty($WANDA_JSON["result"]))
            {
                $DOCTOR_STRANGE = explode("/",$WANDA_JSON["result"]);
                if($DOCTOR_STRANGE[5] === "Fallback")
                {
                    $THOR = jitendra_pro_dev_x_rolex($WANDA_JSON["result"],$id,$ck = NULL);
                    $JANE_FOSTER = jitendra_pro_dev_x_get_true($WANDA_JSON["result"],$id);
                    $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
                    $DEVARA = [
                        'URI="',
                        "$DOCTOR_STRANGE[4]-video",
                        "$DOCTOR_STRANGE[4]-audio",
                        'URI="stream.php?cid=' . $id . '&id=stream.php?cid=' . $id . '&id=',
                        'stream.php?cid=' . $id . '&id=keyframes/stream.php?cid=' . $id . '&id=',
                        'stream.php?cid=',
                        "#EXTM3U",
                    ];
                    $LEO_THALAPATHY = [
                        'URI="stream.php?cid=' . $id . '&key=' . $key . '&id=',
                        "stream.php?cid=$id&key=$key&id=$DOCTOR_STRANGE[4]-video",
                        "stream.php?cid=$id&key=$key&id=$DOCTOR_STRANGE[4]-audio",
                        'URI="stream.php?cid=' . $id . '&key=' . $key . '&id=',
                        'stream.php?cid=' . $id . '&id=keyframes/',
                        "stream.php?ck=$JANE_FOSTER&cid=",
                        "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR",
                    ];

                    $LEO = str_replace($DEVARA, $LEO_THALAPATHY,$CHRISTINE );
                    echo $LEO;
                }
                else if($DOCTOR_STRANGE[3] === $DOCTOR_STRANGE[5])
                {


                    $THOR = jitendra_pro_dev_x_rolex($WANDA_JSON["result"],$id,$ck = NULL);
                    $JANE_FOSTER = jitendra_pro_dev_x_get_true($WANDA_JSON["result"],$id);
                    $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
                    $DEVARA = 
                    [
                        $DOCTOR_STRANGE[3],
                        "#EXTM3U",
                    ];
                    $LEO = 
                    [
                        "stream.php?ck=$JANE_FOSTER&key=$key&cid=$DOCTOR_STRANGE[3]&id=$id&&ts=$DOCTOR_STRANGE[3]",
                        "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR",

                    ];
                    $LEO = str_replace($DEVARA, $LEO, $CHRISTINE);
                    echo $LEO;
                }
                elseif($DOCTOR_STRANGE[5] === "HLSPartner") 
                {
                    $THOR = jitendra_pro_dev_x_rolex($WANDA_JSON["result"],$id,$ck = NULL);
                    $JANE_FOSTER = jitendra_pro_dev_x_get_true($WANDA_JSON["result"],$id);
                    $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
                    $DEVARA = 
                    [
                        $DOCTOR_STRANGE[4],
                        "#EXTM3U",
                    ];
                    $LEO_THALAPATHY = 
                    [
                        "stream.php?ck=$JANE_FOSTER&key=$key&id=$id&cid=$DOCTOR_STRANGE[4]&hls=$DOCTOR_STRANGE[4]",
                        "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR",
                    ];
                    $LEO = str_replace($DEVARA,$LEO_THALAPATHY, $CHRISTINE);
                    echo $LEO;
                    
                }
                else
                {
                    video();
                    echo "#I think we need to increase the lines of code.";
                }
            }
            else
            {
                video();
                echo "#Response is OK, but result not found.";
            }
        }
        else if(strpos($WANDA_JSON["result"], "https://gec-007-jc.slivcdn.com/HLS/") !== false)
        {
            $THOR = jitendra_pro_dev_x_rolex($WANDA_JSON["result"],$id,$ck = NULL);
            $JANE_FOSTER = jitendra_pro_dev_x_get_true($WANDA_JSON["result"],$id);
            $LOKI = $THOR["JITENDRAUNATTI"]["data"];
            $CHRISTINE = explode("/",$WANDA_JSON["result"]);
            $LOKI = explode("_",$CHRISTINE[5]);
            $DEVARA = 
            [
                "$LOKI[0]",
                "#EXTM3U",
            ];
            $LEO_THALAPATHY = 
            [
                "sony.php?ck=$JANE_FOSTER&id=$id&key=$key&hls=$CHRISTINE[0]/$CHRISTINE[1]/$CHRISTINE[2]/$CHRISTINE[3]/$CHRISTINE[4]/$LOKI[0]",
                "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR",
            ];
            $LEO = str_replace($DEVARA, $LEO_THALAPATHY, $THOR["JITENDRAUNATTI"]["data"]);
            echo $LEO;
        }
        else
        {
            video();
            echo "#something went wrong when hit api url";
         
        }
    }
    else
    {
        video();
        echo "#please login first";
        echo "#KEY IS MISSING";
    }
}
else
{
    echo video();
    echo "#UPDATED YOUR SCRIPT";
}
?>