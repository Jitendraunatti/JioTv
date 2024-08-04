<?php
// error_reporting(0);
//=============================================================================//
//                      खून से लिखी हुई कहानी है ये…
//                      KHOON SE LIKHEE HUEE KAHAANEE HAI YE...
//=============================================================================//
$JITENDRA_PRO_DEV_X_DARK_SIDE = "app/data/cache/jitendraunatti";
if(!is_dir($JITENDRA_PRO_DEV_X_DARK_SIDE)){
    mkdir($JITENDRA_PRO_DEV_X_DARK_SIDE,0777,true); 
}




//=============================================================================//
//                        𝐂𝐇𝐀𝐍𝐆𝐄𝐀𝐁𝐋𝐄_𝐀𝐏𝐏_𝐈𝐍𝐅𝐎𝐑𝐌𝐀𝐓𝐈𝐎𝐍
//=============================================================================//
$SCARLET_WITCH["user-agent"] = "plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7";
$SCARLET_WITCH["User-Agent"] = "okhttp/4.9.3";
$SCARLET_WITCH["deviceType"] = "phone";
$SCARLET_WITCH["devicename"] = "V2302A";
$SCARLET_WITCH["p-Name"] = "PD2302";
$SCARLET_WITCH["manufacturer"] = "vivo";
$SCARLET_WITCH["model"] = "V2302A";
$SCARLET_WITCH["x-platform"] = "android";
$SCARLET_WITCH["versionCode"] = "353";
$SCARLET_WITCH["os"] = "android";
$SCARLET_WITCH["appName"] = "RJIL_JioTV";
$SCARLET_WITCH["osversion"] = "13";


function url($id)
{
    if (strlen($id) < 6) 
    {
        $id = "live.php?id=$id&key=JITENDRAUNATTI&e.m3u8";
        return $id;
    } else 
    {
    return $id;
    }
}


function image($cid)
{
    $WANDA = jitendraunatti();
    if(isset($WANDA['pimg'])){
        return $WANDA['pimg'];
    } else{
        return "https://jiotvimages.cdn.jio.com/dare_images/images/$cid.png";
    }
}

function jio_data()
{
global $JITENDRA_PRO_DEV_X_DARK_SIDE;
$ROLEX = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/authToken.txt");
$ROLEX = scarlet_witch("decrypt", $ROLEX );
return $ROLEX;
}



function   jio_tv_re_use_refreshtoken_generate()
{
    global $JITENDRA_PRO_DEV_X_DARK_SIDE;
    $ASUR = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/refresh.txt");
    $ASUR = scarlet_witch("decrypt", $ASUR);
    $ASUR = json_decode($ASUR,true);
    return $ASUR['authToken'];

}


function video(){
    $ASUR = jitendraunatti();
    $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
    $LOKI = str_replace("/amplify_video/","https://video.twimg.com/amplify_video/",$LOKI);
    echo $LOKI;
}
function jitendra_kumar()
{
    return "JioTv v2.O_03-08-24 ✅";
}

//=============================================================================//
//                      𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐑𝐄𝐅𝐑𝐄𝐒𝐇𝐓𝐎𝐊𝐄𝐍_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jio_tv_refreshtoken_generate()
{
    global $JITENDRA_PRO_DEV_X_DARK_SIDE,$SCARLET_WITCH;
    $BLOODY_SWEET = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/authToken.txt");
    $BLOODY_SWEET = scarlet_witch("decrypt", $BLOODY_SWEET);
    $BLOODY_SWEET = json_decode($BLOODY_SWEET, true);
    $JITENDRA_PRO_DEV_X_URL = "https://auth.media.jio.com/tokenservice/apis/v1/refreshtoken?langId=6";
    $JITENDRA_PRO_DEV_X_KANG = json_encode([
        "appName" => $SCARLET_WITCH["appName"],
        "deviceId" => $BLOODY_SWEET['deviceId'],
        "refreshToken" => $BLOODY_SWEET['refreshToken']
    ]);
   $JITENDRA_PRO_DEV_X_ROLEX =[
      "accesstoken: " . $BLOODY_SWEET['authToken'],
      "uniqueId: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
      "devicetype: " . $SCARLET_WITCH["deviceType"],
      "versionCode: " . $SCARLET_WITCH["versionCode"],
      "os: " . $SCARLET_WITCH["os"],
      "Connection: Keep-Alive",
      "Content-Type: application/json"
   ];
    
   $CASSIE = jitendra_pro_dev_x_post_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX,$JITENDRA_PRO_DEV_X_KANG);
   file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/refresh.txt",scarlet_witch("encrypt", $CASSIE["JITENDRAUNATTI"]["data"]));
  
  
}
//=============================================================================//
//                       𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐎𝐓𝐏_𝐒𝐄𝐍𝐃_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jiotv_otp_send($mobile_no)
{
    global $JITENDRA_PRO_DEV_X_DARK_SIDE,$SCARLET_WITCH;
    $JITENDRA_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/send?langId=6";
    $JITENDRA_PRO_DEV_X_KANG = json_encode(["number" => base64_encode("+91$mobile_no")]);
    $JITENDRA_PRO_DEV_X_ROLEX = [
        "appName: " . $SCARLET_WITCH["appName"],
        "os: " . $SCARLET_WITCH["os"],
        "devicetype: " . $SCARLET_WITCH["deviceType"],
        "Content-Type: application/json; charset=utf-8",
        "Content-Length: " . strlen($JITENDRA_PRO_DEV_X_KANG),
        "Host: jiotvapi.media.jio.com",
        "Accept-Encoding: gzip",
        "User-Agent: " . $SCARLET_WITCH["User-Agent"],
    ];

    $CASSIE = jitendra_pro_dev_x_post_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX,$JITENDRA_PRO_DEV_X_KANG);
    $WANDA = $CASSIE["JITENDRAUNATTI"]["info"];
    if($WANDA['http_code'] == "204")
    {
      $SYLVIE = "OTP SENT SUCCESSFULLY ✅";
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mobile.txt",$mobile_no);
    }
    else if($WANDA['http_code'] == "400")
    {
        $SYLVIE = "OTP SENT FAILED ❌";
    }
    else
    {
        $SYLVIE = "SOMETHING WENT WRONG ❌";
    }
    return $SYLVIE;
}

//=============================================================================//
//                      𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐎𝐓𝐏_𝐕𝐄𝐑𝐈𝐅𝐈𝐂𝐀𝐓𝐈𝐎𝐍_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//

function jio_tv_login($OTP) 
{
    global $JITENDRA_PRO_DEV_X_DARK_SIDE,$SCARLET_WITCH;
    $JITENDRA_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/verify?langId=6";
    $JANET = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mobile.txt");
    $JITENDRA_PRO_DEV_X_KANG = '{
        "number": "' .base64_encode("+91$JANET").'",
        "otp": "' . $OTP .'",
        "deviceInfo": {
            "consumptionDeviceName": "'. $SCARLET_WITCH["devicename"] .'",
            "info": {
            "type": "' . $SCARLET_WITCH["os"] .'",
            "platform": {
                "name": "'. $SCARLET_WITCH["p-Name"] .'"
            },
            "androidId": "'. substr(sha1(time() . rand(00, 99)), 0, 16) .'"
            }
        }
        }';



        $JITENDRA_PRO_DEV_X_ROLEX = [
            "appName: " . $SCARLET_WITCH["appName"],
            "os: " . $SCARLET_WITCH["os"],
            "devicetype: " . $SCARLET_WITCH["deviceType"],
            "Content-Type: application/json; charset=utf-8",
            "Content-Length: " . strlen($JITENDRA_PRO_DEV_X_KANG),
            "Host: jiotvapi.media.jio.com",
            "Accept-Encoding: gzip",
            "User-Agent: " . $SCARLET_WITCH["User-Agent"],
        ];


    $CASSIE = jitendra_pro_dev_x_post_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX,$JITENDRA_PRO_DEV_X_KANG);
    $LOKI = @json_decode($CASSIE["JITENDRAUNATTI"]["data"], true);

    if (isset($LOKI['code'])) 
    {
        if ($LOKI['code'] == "1043") 
        {
            $WANDA = $LOKI['message'] . "❌";
        } else 
        {
            $WANDA = "SOMETHING WENT WRONG ❌";
        }
    } 
    else if (isset($LOKI['authToken']) && !empty($LOKI['authToken'])) 
    {
            $WANDA = "LOGGED IN SUCCESSFULLY ✅";
            file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/authToken.txt",scarlet_witch("encrypt",$CASSIE["JITENDRAUNATTI"]["data"]));
            unlink("$JITENDRA_PRO_DEV_X_DARK_SIDE/mobile.txt");
            jio_tv_refreshtoken_generate();
    } 
    else 
    {
              $WANDA = "SOMETHING WENT WRONG ❌";
    }
    
    return $WANDA;
    
}


function scarlet_witch($action, $data)
{
    $method = "aes-128-cbc";
    $iv = "JITENDRA_KUMAR_U";
    $key = "JITENDRA_KUMAR_U";
    if($action == "encrypt")
    {
        $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
        if(!empty($encrypted))
        {
            $response = bin2hex($encrypted);
        }
    }
    elseif($action == "decrypt")
    {
        $decrypted = openssl_decrypt(hex2bin($data), $method, $key, OPENSSL_RAW_DATA, $iv);
        if(!empty($decrypted))
        {
            $response = $decrypted;
        }
    }
    else{
        $response = "something went wrong";
     }
    return $response;
}

function jitendraunatti()
{
    $ROLEX = file_get_contents("https://jiotv-playlist.pages.dev/detail.json");
    $ASUR = json_decode($ROLEX,true);
    return $ASUR;
}
//=============================================================================//
//                     𝐉𝐈𝐓𝐄𝐍𝐃𝐑𝐀'𝐬 𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐄
//=============================================================================//
function jitendra_pro_dev_x_get_true($JITENDRA_PRO_DEV_X_URL,$id)
{
    $BLOODY_SWEET = json_decode(jio_data(),true);
    global $SCARLET_WITCH;
    $JITENDRA_PRO_DEV_X_ROLEX =
            [
                "os: " . $SCARLET_WITCH["os"],
                "appName: " . $SCARLET_WITCH["appName"],
                "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
                "deviceid: " . $BLOODY_SWEET['deviceId'],
                "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "versionCode: " . $SCARLET_WITCH["versionCode"],
                "devicetype: " . $SCARLET_WITCH["deviceType"],
                "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "osversion: " . $SCARLET_WITCH["osversion"],
                "srno: 240727144017",
                "usergroup: tvYR7NSNn7rymo3F",
                "x-platform: " . $SCARLET_WITCH["x-platform"],
                "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
                "ssotoken: " . $BLOODY_SWEET['ssoToken'],
                "channel_id: " . $id,
                "user-agent: " . $SCARLET_WITCH["user-agent"],
                "accept-encoding: gzip, deflate",
                "priority: u=1, ",
            ];
    $JITENDRA_PRO_DEV_X_IRON_MAN  = curl_init();
        curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN , [
        CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_HEADER => true, 
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
        ]);

         $JITENDRA_PRO_DEV_X_LOKI = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_STATUS = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $pattern = '/^Set-Cookie:\s*(.*)$/mi';
        preg_match_all($pattern, $JITENDRA_PRO_DEV_X_LOKI , $matches);
        $checker = $matches;
        $JITENDRAUNTTI = explode(";", $checker[1][0]);
        return  bin2hex($JITENDRAUNTTI[0]);
}

function jitendra_pro_dev_x_get_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX)
{
    $JITENDRA_PRO_DEV_X_IRON_MAN  = curl_init();
        curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN , [
        CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_HEADER => false, 
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
        ]);

         $JITENDRA_PRO_DEV_X_LOKI = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_STATUS = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
          "JITENDRAUNATTI" => array(
              "data" => $JITENDRA_PRO_DEV_X_LOKI,
              "info" => $JITENDRA_PRO_DEV_X_STATUS,
          )
        );
        return  $JITENDRA_PRO_DEV_X_JSON_ENCODE;
}



function doctor_strange($wanda){
    $ROLEX = jitendraunatti();
    $JITENDRA_PRO_DEV_X_URL = "http://{$ROLEX['url']}/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http://localhost/ch/{$wanda}&series=&forced_storage=0&disable_ad=0&download=0&force_ch_link_check=0&JsHttpRequest=1-xml";
    $THOR = jitendra_pro_dev_x_rolex($JITENDRA_PRO_DEV_X_URL,$wanda,$ck = NULL);
    $CHRISTINE = $THOR["JITENDRAUNATTI"]["data"];
    $i6 = json_decode($CHRISTINE, true);
    return $i6;
    
}



function jitendra_pro_dev_x_rolex($JITENDRA_PRO_DEV_X_URL,$cid,$ck)
{
    $ROLEX = jitendraunatti();
    $BLOODY_SWEET = json_decode(jio_data(),true);
    global $SCARLET_WITCH;
    if(isset($ck) && !empty($ck))
    {
        $JITENDRA_PRO_DEV_X_ROLEX =
        [
            "os: " . $SCARLET_WITCH["os"],
            "appName: " . $SCARLET_WITCH["appName"],
            "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
            "deviceid: " . $BLOODY_SWEET['deviceId'],
            "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "versionCode: " . $SCARLET_WITCH["versionCode"],
            "devicetype: " . $SCARLET_WITCH["deviceType"],
            "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "osversion: " . $SCARLET_WITCH["osversion"],
            "srno: 240727144017",
            "usergroup: tvYR7NSNn7rymo3F",
            "x-platform: " . $SCARLET_WITCH["x-platform"],
            "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
            "ssotoken: " . $BLOODY_SWEET['ssoToken'],
            "channelid: " .$cid,
            "cookie: " . $ck,
            "user-agent: " . $SCARLET_WITCH["user-agent"],
            "accept-encoding: gzip, deflate",
            "priority: u=1, ",
        ];
    }
    else if (strpos($JITENDRA_PRO_DEV_X_URL, "stalker_portal") !== false)
    {
        $ROLEX['token'] = file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=JITENDRA_PRO_DEV&portal=$cid");
        $JITENDRA_PRO_DEV_X_ROLEX = [
            "Cookie: mac=" . base64_decode($ROLEX['mac']),
            "Authorization: Bearer " . $ROLEX['token'],
            "Referer: http://{$ROLEX['url']}/stalker_portal/c/",
            "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
            "X-User-Agent: Model: MAG250; Link:"
        ];
         
    }
    else
    {
         $JITENDRA_PRO_DEV_X_ROLEX =
        [
            "os: " . $SCARLET_WITCH["os"],
            "appName: " . $SCARLET_WITCH["appName"],
            "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
            "deviceid: " . $BLOODY_SWEET['deviceId'],
            "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "versionCode: " . $SCARLET_WITCH["versionCode"],
            "devicetype: " . $SCARLET_WITCH["deviceType"],
            "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "osversion: " . $SCARLET_WITCH["osversion"],
            "srno: 240727144017",
            "usergroup: tvYR7NSNn7rymo3F",
            "x-platform: " . $SCARLET_WITCH["x-platform"],
            "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
            "ssotoken: " . $BLOODY_SWEET['ssoToken'],
            "channel_id: " . $cid,
            "user-agent: " . $SCARLET_WITCH["user-agent"],
            "accept-encoding: gzip, deflate",
            "priority: u=1, ",
        ];
    }

    $JITENDRA_PRO_DEV_X_IRON_MAN  = curl_init();
        curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN , [
        CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'gzip',
        CURLOPT_HEADER => false, 
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
        ]);

         $JITENDRA_PRO_DEV_X_LOKI = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_STATUS = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
          "JITENDRAUNATTI" => array(
              "data" => $JITENDRA_PRO_DEV_X_LOKI,
              "info" => $JITENDRA_PRO_DEV_X_STATUS,
          )
        );
        
        return  $JITENDRA_PRO_DEV_X_JSON_ENCODE;
}

function jitendra_pro_dev_x_post_false($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX,$JITENDRA_PRO_DEV_X_KANG)
{
    $JITENDRA_PRO_DEV_X_IRON_MAN  = curl_init();
        curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN , [
        CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'gzip',
        CURLOPT_HEADER => false, 
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $JITENDRA_PRO_DEV_X_KANG,
        CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
        ]);

         $JITENDRA_PRO_DEV_X_LOKI = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_STATUS = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
          "JITENDRAUNATTI" => array(
              "data" => $JITENDRA_PRO_DEV_X_LOKI,
              "info" => $JITENDRA_PRO_DEV_X_STATUS,
          )
        );
        return  $JITENDRA_PRO_DEV_X_JSON_ENCODE;
}
?>
