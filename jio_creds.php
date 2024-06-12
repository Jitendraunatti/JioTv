<?php

//=============================================================================//
//                      खून से लिखी हुई कहानी है ये…
//                      KHOON SE LIKHEE HUEE KAHAANEE HAI YE...
//=============================================================================//

function jio_data(){
$ROLEX = file_get_contents("authToken.txt");
return $ROLEX;
}
function url($id)
{
    if (strlen($id) < 6) {
        
        $id = "live.php?id=$id&key=JITENDRAUNATTI";
        return $id;
    } else {
    return $id;
    }
    }
    function jiotv_otp_send($mobile_no){
        $JITENDRA_PRO_DEV = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/send?langId=6";
        $JITENDRA_PRO_DEV_X_POST_X_KANGS = json_encode(["number" => base64_encode("+91$mobile_no")]);
        $JITENDRA_PRO_DEV_X_ROLEX = [
            "appName: RJIL_JioTV",
            "os: android",
            "devicetype: phone",
            "Content-Type: application/json; charset=utf-8",
            "Content-Length: " . strlen($JITENDRA_PRO_DEV_X_POST_X_KANGS),
            "Host: jiotvapi.media.jio.com",
            "Accept-Encoding: gzip",
            "User-Agent: okhttp/4.9.3",
        ];
    
        $JITENDRA_PRO_DEV_X_IRON_MAN = curl_init($JITENDRA_PRO_DEV);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_ENCODING, "gzip");
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_MAXREDIRS, 10);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_TIMEOUT, 30);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_POSTFIELDS, $JITENDRA_PRO_DEV_X_POST_X_KANGS);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_HTTPHEADER, $JITENDRA_PRO_DEV_X_ROLEX);
    
        $CASSIE = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        $WANDA = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
     ;
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $LOKI = @json_decode($CASSIE, true);
    
        if($WANDA['http_code'] == "204"){
          $SYLVIE = "OTP SENT SUCCESSFULLY";
          file_put_contents("mn.txt",$mobile_no);
        }
    
        else if($WANDA['http_code'] == "400"){
            $SYLVIE = "OTP SENT FAILED";
          }
      
         else{
            $SYLVIE = "SOMETHING WENT WRONG";
        }
    
        return $SYLVIE;
    }
    function Scarlet_Witch($wanda){
        $ROLEX = jitendraunatti();
        $n2 = "http://{$ROLEX['url']}/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http://localhost/ch/{$wanda}&series=&forced_storage=0&disable_ad=0&download=0&force_ch_link_check=0&JsHttpRequest=1-xml";
        $t4 = array(
            "Cookie: mac=" .base64_decode($ROLEX['mac']),
            "Authorization: Bearer ".$ROLEX['token'],
            "Referer: http://{$ROLEX['url']}/stalker_portal/c/",
            "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
            "X-User-Agent: Model: MAG250; Link:",
            "Referer: http://{$ROLEX['url']}/stalker_portal/c/"
        );
        $n3 = curl_init();
        curl_setopt($n3, CURLOPT_URL, $n2);
        curl_setopt($n3, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($n3, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($n3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($n3, CURLOPT_HTTPHEADER, $t4);
        curl_setopt($n3, CURLOPT_USERAGENT, 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3');
        curl_setopt($n3, CURLOPT_REFERER, "http://{$ROLEX['url']}/stalker_portal/c/");
        $h5 = curl_exec($n3);
        curl_close($n3);
        $i6 = json_decode($h5, true);
        return $i6;
        
    }
    function image($cid){
        $WANDA = jitendraunatti();
        if(isset($WANDA['pimg'])){
            return $WANDA['pimg'];
        } else{
            return "https://jiotvimages.cdn.jio.com/dare_images/images/$cid.png";
        }
    }
    function video(){
        $ASUR = jitendraunatti();
        $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
        $LOKI = str_replace("/amplify_video/","https://video.twimg.com/amplify_video/",$LOKI);
        return $LOKI;
    }
    function jio_tv_login($OTP) {
        $JITENDRA_PRO_DEV = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/verify?langId=6";
        $JANET = file_get_contents("mn.txt");
        $JITENDRA_PRO_DEV_X_POST_X_KANGS = json_encode([
            "number" => base64_encode("+91$JANET"),
            "otp" => "$OTP",
            "deviceInfo" => [
                "consumptionDeviceName" => "V2302A",
                "info" => [
                    "type" => "android",
                    "platform" => [
                        "name" => "PD2302"
                    ],
                    "androidId" => substr(sha1(time() . rand(00, 99)), 0, 16)
                ]
            ]
        ]);
    
        $JITENDRA_PRO_DEV_X_ROLEX = [
            "appName: RJIL_JioTV",
            "os: android",
            "devicetype: phone",
            "Content-Type: application/json",
            "Content-Length: " . strlen($JITENDRA_PRO_DEV_X_POST_X_KANGS),
            "Host: jiotvapi.media.jio.com",
            "User-Agent: okhttp/4.9.3",
            
        ];
    
        $JITENDRA_PRO_DEV_X_IRON_MAN = curl_init($JITENDRA_PRO_DEV);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_ENCODING, "gzip");
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_MAXREDIRS, 10);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_TIMEOUT, 30);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_POSTFIELDS, $JITENDRA_PRO_DEV_X_POST_X_KANGS);
        curl_setopt($JITENDRA_PRO_DEV_X_IRON_MAN, CURLOPT_HTTPHEADER, $JITENDRA_PRO_DEV_X_ROLEX);
    
        $CASSIE = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
        curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
        $JANE_FOSTER = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
        $LOKI = @json_decode($CASSIE, true);
    
        if (isset($LOKI['code'])) {
            if ($LOKI['code'] == "1040") {
                $WANDA = "WRONG OTP, PLEASE ENTER A VALID OTP";
            } else {
                $WANDA = "SOMETHING WENT WRONG";
            }
            } else if (isset($JANE_FOSTER['http_code']) && $JANE_FOSTER['http_code'] == "200") {
                $WANDA = "LOGGED IN SUCCESSFULLY";
                
                file_put_contents("authToken.txt", $CASSIE);
            } 
            else {
                  $WANDA = "SOMETHING WENT WRONG";
            }
        
        return $WANDA;
        
    }
    function jio_tv_refreshtoken_generate(){
    $BLOODY_SWEET = file_get_contents("authToken.txt");
    $BLOODY_SWEET = json_decode($BLOODY_SWEET, true);
    $JITENDRA_PRO_DEV_X_URL = "https://auth.media.jio.com/tokenservice/apis/v1/refreshtoken?langId=6";
    $JITENDRA_PRO_DEV_X_POST_X_KANGS = json_encode([
        "appName" => "RJIL_JioTV",
        "deviceId" => $BLOODY_SWEET['deviceId'],
        "refreshToken" => $BLOODY_SWEET['refreshToken']
    ]);
   $JITENDRA_PRO_DEV_X_ROLEX =[
      "accesstoken: " . $BLOODY_SWEET['authToken'],
      "uniqueId: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
      "devicetype: phone",
      "versionCode: 331",
      "os: android",
      "Connection: Keep-Alive",
      "Content-Type: application/json"
   ];
    
   $JITENDRA_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN, [
    CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
    CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $JITENDRA_PRO_DEV_X_POST_X_KANGS,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false,
    CURLOPT_ENCODING => "gzip",
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 10
]);
$WANDA = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
$WANDA = json_decode($WANDA,true);
$WANDA = $WANDA['authToken'];
file_put_contents("refresh.txt",$WANDA);
return $WANDA;
}
 function   jio_tv_re_use_refreshtoken_generate(){
 $ASUR = file_get_contents("refresh.txt");
 return $ASUR;

}
function jitendra_kumar(){
    return "JioTv v0.10_06_24 ✅";
}
function jitendraunatti(){
    $ROLEX = file_get_contents("https://jiotv.developed-by-asur.workers.dev/");
    $ASUR = json_decode($ROLEX,true);
    return $ASUR;
}

