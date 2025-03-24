<?php
//=============================================================================//
//                      खून से लिखी हुई कहानी है ये…
//                      KHOON SE LIKHEE HUEE KAHAANEE HAI YE...
//=============================================================================//
error_reporting(0);
$DARK_SIDE = "doctor_strange";
$WHITE_SIDE = "jitendraunatti";
if (!is_dir($DARK_SIDE)) {
    mkdir($DARK_SIDE, 0777, true);
}
if (!is_dir($WHITE_SIDE)) {
    mkdir($WHITE_SIDE, 0777, true);
}
if (!file_exists("$DARK_SIDE/.htaccess")) {
    file_put_contents("$DARK_SIDE/.htaccess", "Deny from all\n");
}
if (!file_exists("$DARK_SIDE/index.php")) {
    file_put_contents("$DARK_SIDE/index.php", "<?php http_response_code(403); exit('Forbidden'); ?>");
}
//=============================================================================//
//                        𝐂𝐇𝐀𝐍𝐆𝐄𝐀𝐁𝐋𝐄_𝐀𝐏𝐏_𝐈𝐍𝐅𝐎𝐑𝐌𝐀𝐓𝐈𝐎𝐍
//=============================================================================//
$SCARLET_WITCH["user-agent"] = "plaYtv/7.1.7 (Linux;Android 13) ExoPlayerLib/2.11.7";
$SCARLET_WITCH["User-Agent"] = "okhttp/4.11.0";
$SCARLET_WITCH["deviceType"] = "phone";
$SCARLET_WITCH["devicename"] = "V2302A";
$SCARLET_WITCH["p-Name"] = "PD2302";
$SCARLET_WITCH["manufacturer"] = "vivo";
$SCARLET_WITCH["model"] = "V2302A";
$SCARLET_WITCH["x-platform"] = "android";
$SCARLET_WITCH["proxy"] = "ON";
$SCARLET_WITCH["versionCode"] = "380";
$SCARLET_WITCH["os"] = "android";
$SCARLET_WITCH["appName"] = "RJIL_JioTV";
$SCARLET_WITCH["osversion"] = "13";
$BLOODY_SWEET = jio_data();
$TONY_STARK = doctor_strange()["jiotv_api"];
function jio_tv_re_use_refreshtoken_generate()
{
    global $DARK_SIDE, $SCARLET_WITCH;
    $ASUR = file_get_contents($DARK_SIDE . "/Refresh_token.jitendraunatti");
    $ASUR = scarlet_witch("decrypt", $ASUR);
    $ASUR = json_decode($ASUR, true);
    return $ASUR["data"]['authToken'];
}
function image($cid)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;

    if (isset($TONY_STARK['image_api'])) {
        $ROLEX = json_decode(file_get_contents($TONY_STARK["image_api"]), true);
        return $ROLEX[array_rand($ROLEX)]["url"];
    } else {
        return "https://jiotvimages.cdn.jio.com/dare_images/images/$cid.png";
    }
}
function live_id($id)
{
    if (strlen($id) < 6 || strpos($id, "zee5.com") !== false) {
        $id = "live.php?id=$id&token=JITENDRA_KUMAR&e.m3u8";
        return str_replace(".jitendraunatti", ".m3u8", $id);
    } else {
        return str_replace(".jitendraunatti", ".m3u8", $id);
    }
}
function video()
{
    $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
    $LOKI = str_replace("/amplify_video/", "https://video.twimg.com/amplify_video/", $LOKI);
    return $LOKI;
}
function jitendra_kumar()
{
    return "JioTv v3.0.0_023-03-2025";
}
function jiotv_old()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    return json_decode(scarlet_witch("decrypt",  file_get_contents($DARK_SIDE . "/login_token.jitendraunatti")), true);
}
//=============================================================================//
//                      𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐑𝐄𝐅𝐑𝐄𝐒𝐇𝐓𝐎𝐊𝐄𝐍_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jio_tv_refreshtoken_generate()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $BLOODY_SWEET = jio_data();

    $KANG = json_encode([
        "appName" => $SCARLET_WITCH["appName"],
        "deviceId" => $BLOODY_SWEET['deviceId'],
        "refreshToken" => $BLOODY_SWEET['refreshToken']
    ]);
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH["User-Agent"],
        'Accept-Encoding: gzip',
        'Content-Type: application/json',
        "accesstoken: " . $BLOODY_SWEET['authToken'],
        "devicetype: " . $SCARLET_WITCH["deviceType"],
        "versionCode: " . $SCARLET_WITCH["versionCode"],
        "os: " . $SCARLET_WITCH["os"],
        'uniqueid: ' . $BLOODY_SWEET["sessionAttributes"]["user"]["unique"],
        'content-type: application/json; charset=utf-8',

    ];

    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["refreshtoken"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if ($CHRISTINE['code'] === 401) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else if ($CHRISTINE['code'] === 200 && !empty($CHRISTINE['data']["authToken"]) &&  !empty($CHRISTINE['data']["authToken"])) {
        $JARVIS = "LOGGED IN SUCCESSFULLY ✅";
        file_put_contents($DARK_SIDE . "/Refresh_token.jitendraunatti", scarlet_witch("encrypt", $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]));
    } else {
        $JARVIS = "SOMETHING WENT WRONG ❌";
    }
    return $JARVIS;
}
//=============================================================================//
//                             𝐄𝐗𝐏𝐈𝐑𝐄_𝐀𝐋𝐋_𝐔𝐒𝐄𝐑𝐒
//=============================================================================//
function expireallusers($temp_token)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $MCU =   json_decode(scarlet_witch("decrypt", file_get_contents($DARK_SIDE . "/login_token.jitendraunatti")), true);
    $KANG = '{"appName":"RJIL_JioTV","deviceId":"' . $BLOODY_SWEET['deviceId'] . '"}';
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH["User-Agent"],
        'Accept-Encoding: gzip',
        'content-length: 54',
        'Content-Type: application/json',
        'x-platform: ' . $SCARLET_WITCH["x-platform"],
        'temptoken: ' . $temp_token,
        'content-type: application/json; charset=utf-8',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["expireallusers"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if ($CHRISTINE['code'] === 401) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else if ($CHRISTINE['code'] === 200 && !empty($CHRISTINE['data']["refreshToken"]) && !empty($CHRISTINE['data']["authToken"])) {
        $JARVIS = "LOGGED IN SUCCESSFULLY ✅";
        $JITENDR_UNIVERSE = array_merge($MCU, $CHRISTINE);
        file_put_contents($DARK_SIDE . "/login_token.jitendraunatti", scarlet_witch("encrypt", $JITENDR_UNIVERSE));
        file_put_contents($DARK_SIDE . "/temp_login_token.jitendraunatti", $JITENDR_UNIVERSE);
        jio_tv_refreshtoken_generate();
    } else {
        $JARVIS = "SOMETHING WENT WRONG ❌";
    }
    return $JARVIS;
}
//=============================================================================//
//                             𝐕𝐀𝐋𝐈𝐃𝐀𝐓𝐈𝐎𝐍
//=============================================================================//
function jio_data()
{
    global $DARK_SIDE, $SCARLET_WITCH;
    return json_decode(scarlet_witch("decrypt", file_get_contents($DARK_SIDE . "/login_token.jitendraunatti")), true)["data"];
}
function token_verifier()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH["User-Agent"],
        'Accept-Encoding: gzip',
        'lbcookie: 1',
        'ssotoken: ' . $BLOODY_SWEET["jToken"],
        'accesstoken: ' . jio_tv_re_use_refreshtoken_generate(),
        'subscriberid: ' . $BLOODY_SWEET["sessionAttributes"]["user"]["unique"],
        'appkey: NzNiMDhlYzQyNjJm',
        'deviceid: ' . $BLOODY_SWEET["deviceId"],
        'uniqueid: ' . $BLOODY_SWEET["sessionAttributes"]["user"]["unique"],
        'devicetype: ' . $SCARLET_WITCH["deviceType"],
        'versioncode: ' . $SCARLET_WITCH["versionCode"],
        'languageid: 6',
        'osversion: ' . $SCARLET_WITCH["osversion"],
        'os: ' . $SCARLET_WITCH["os"],
        'userid: ' . $BLOODY_SWEET["sessionAttributes"]["user"]["subscriberId"],
        'isott: false',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["beginsession"])), $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if ($CHRISTINE['code'] === 419) {
        jio_tv_refreshtoken_generate();
        $JARVIS = true;
    } else {
        $JARVIS = false;
    }
    return $JARVIS;
}
//=============================================================================//
//                     𝐉𝐈𝐓𝐄𝐍𝐃𝐑𝐀'𝐬 𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐄
//=============================================================================//
function doctor_strange()
{
    $ROLEX = scarlet_witch("decrypt", file_get_contents("https://jiotv-playlist.pages.dev/jiotv_3.jitendraunatti"));
    $ASUR = json_decode($ROLEX, true)["JITENDRAUNATTI"];
    return $ASUR;
}
function scarlet_witch($action, $data)
{
    $method = "aes-128-cbc";
    $iv = "JITENDRA_KUMAR_U";
    $key = "JITENDRA_KUMAR_U";
    if ($action == "encrypt") {
        $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
        if (!empty($encrypted)) {
            $response = bin2hex($encrypted);
        }
    } elseif ($action == "decrypt") {
        $decrypted = openssl_decrypt(hex2bin($data), $method, $key, OPENSSL_RAW_DATA, $iv);
        if (!empty($decrypted)) {
            $response = $decrypted;
        }
    } else {
        $response = "something went wrong";
    }
    return $response;
}
//=============================================================================//
//                      𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐎𝐓𝐏_𝐕𝐄𝐑𝐈𝐅𝐈𝐂𝐀𝐓𝐈𝐎𝐍_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jio_tv_login($OTP)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $JANET = file_get_contents("$DARK_SIDE/mobile.txt");
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH["User-Agent"],
        'Accept-Encoding: gzip',
        'Content-Type: application/json',
        'appname: ' . $SCARLET_WITCH["appName"],
        'os: ' . $SCARLET_WITCH["os"],
        'devicetype: ' . $SCARLET_WITCH["deviceType"],
        'content-type: application/json; charset=utf-8',
    ];
    $KANG = '{
        "number": "' . base64_encode("+91$JANET") . '",
        "otp": "' . $OTP . '",
        "deviceInfo": {
            "consumptionDeviceName": "' . $SCARLET_WITCH["devicename"] . '",
            "info": {
            "type": "' . $SCARLET_WITCH["os"] . '",
            "platform": {
                "name": "' . $SCARLET_WITCH["p-Name"] . '"
            },
            "androidId": "' . substr(sha1(time() . rand(00, 99)), 0, 16) . '"
            }
        }
        }';

    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["verify"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    $NICK_FURY = $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"];
    if ($CHRISTINE['code'] === 1043) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else if ($CHRISTINE['code'] === 200 && (!empty($CHRISTINE['data']["tempToken"]) || !empty($CHRISTINE['data']["authToken"]))) {
        //  $JARVIS = "LOGGED IN SUCCESSFULLY ✅";
        unlink($DARK_SIDE . "/mobile.txt");
        file_put_contents($DARK_SIDE . "/login_token.jitendraunatti", scarlet_witch("encrypt", $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]));
        file_put_contents($DARK_SIDE . "/logCXXCin_token.jitendraunatti",  $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]);
        if (isset($CHRISTINE['data']["tempToken"]) && !empty($CHRISTINE['data']["tempToken"])) {
            return $JARVIS =  expireallusers($CHRISTINE['data']["tempToken"]);
        }
        if (isset($CHRISTINE['data']["authToken"]) && !empty($CHRISTINE['data']["authToken"])) {
            $JARVIS = jio_tv_refreshtoken_generate();
            // $JARVIS = "LOGGED IN SUCCESSFULLY ✅";
        }
    } else {
        $JARVIS = "SOMETHING WENT WRONG ❌";
    }
    return $JARVIS;
}
//=============================================================================//
//                       𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐎𝐓𝐏_𝐒𝐄𝐍𝐃_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jiotv_otp_send($mobile_no)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $KANG = '{"number":"' . base64_encode('+91' . $mobile_no) . '"}';
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH["User-Agent"],
        'Accept-Encoding: gzip',
        'Content-Type: application/json',
        'appname: ' . $SCARLET_WITCH["appName"],
        'os: ' . $SCARLET_WITCH["os"],
        'devicetype: ' . $SCARLET_WITCH["deviceType"],
        'content-type: application/json; charset=utf-8',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["send"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    $NICK_FURY = $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"];
    if ($CHRISTINE['code'] === 1042) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else if ($NICK_FURY['http_code'] === 204) {
        $JARVIS = "OTP SENT SUCCESSFULLY ✅";
        file_put_contents($DARK_SIDE . "/mobile.txt", $mobile_no);
    } else if ($CHRISTINE['code'] === 1002) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else if ($CHRISTINE['code'] === 1040) {
        $JARVIS = $CHRISTINE['message'] . " ❌";
    } else {
        $JARVIS = "SOMETHING WENT WRONG ❌";
    }
    return $JARVIS;
}
function cookie_fetecher($THANOS, $BENZ)
{
    global $DARK_SIDE, $SCARLET_WITCH, $TONY_STARK;
    $api =  $TONY_STARK["cookie_api"];
    $DOCTOR_STRANGE = jitendraunatti($THANOS, 0, 'GET',  null, 1, 0, 0, 0, 0, 0, $BENZ, null);
    $CHRISTINE = $DOCTOR_STRANGE['JITENDRAUNATTI']['data'];
    $pattern = '/^Set-Cookie:\s*(.*)$/mi';
    preg_match_all($pattern, $CHRISTINE, $matches);
    $checker = $matches;
    $JITENDRAUNTTI = explode(";", $checker[1][0]);
    file_put_contents($DARK_SIDE . "/cookie.txt",  $JITENDRAUNTTI[0]);
    file_get_contents($api . '/?cookie=' . base64_encode($JITENDRAUNTTI[0]));
    return $JITENDRAUNTTI[0];
}
function cookie()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $WANDA = doctor_strange()["zee_api"];
    $THOR =  $WANDA["cookie_api"];
    $VISION = $WANDA["headers"];
    $IRON_MAN = $DARK_SIDE . "/cookie.jitendraunatti";
    if (file_exists($IRON_MAN)) {
        $HULK = file_get_contents($IRON_MAN);
        $AVENGERS = explode('~', $HULK);
        $CAPTAIN_AMERICA = null;
        foreach ($AVENGERS as $BLACK_WIDOW) {
            if (strpos($BLACK_WIDOW, 'exp=') !== false) {
                $DOCTOR_STRANGE = explode('=', $BLACK_WIDOW);
                $CAPTAIN_AMERICA = $DOCTOR_STRANGE[2] ?? null;
                break;
            }
        }
        if ($CAPTAIN_AMERICA === null || time() > $CAPTAIN_AMERICA) {
            $SPIDER_MAN = json_decode(file_get_contents($THOR), true)['JITENDRAUNATTI']["ZEE5"];
            if ($SPIDER_MAN) {
                file_put_contents($IRON_MAN,  $SPIDER_MAN);
            }
        } else {
            $SPIDER_MAN = $HULK;
        }
    } else {
        $SPIDER_MAN = json_decode(file_get_contents($THOR), true)['JITENDRAUNATTI']["ZEE5"];
        if ($SPIDER_MAN) {
            file_put_contents($IRON_MAN,  $SPIDER_MAN);
        }
    }
    $ROLEX = array();
    $VISION["cookie"] =   $SPIDER_MAN;
    foreach ($VISION as $WANDA => $SCARLET_WITCH) {
        $ROLEX[] = "$WANDA: $SCARLET_WITCH";
    }
    return $ROLEX;
}
function jitendraunatti($THANOS, $ROLEX, $NICK_FURY, $KANG, $PETER_PARKER, $CHAVEZ, $JANET, $HANK, $MJ, $LEO, $BENZ, $MIGHTY_THOR)
{

    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET;
    if (!empty($MIGHTY_THOR)  && $MIGHTY_THOR !== null && $MIGHTY_THOR !== 0) {
        $ROLEX =
            [
                "os: " . $SCARLET_WITCH["os"],
                "appName: " . $SCARLET_WITCH["appName"],
                "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
                "deviceid: " . $BLOODY_SWEET['deviceId'],
                "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
                "versionCode: " . $SCARLET_WITCH["versionCode"],
                "devicetype: " . $SCARLET_WITCH["deviceType"],
                "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "osversion: " . $SCARLET_WITCH["osversion"],
                "srno: " . date('ymdHis'),
                "usergroup: tvYR7NSNn7rymo3F",
                "x-platform: " . $SCARLET_WITCH["x-platform"],
                "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
                "ssotoken: " . $BLOODY_SWEET['ssoToken'],
                "channelid: " . $BENZ,
                "cookie: " . base64_decode(hex2bin($MIGHTY_THOR)),
                "user-agent: " . $SCARLET_WITCH["user-agent"],
                "accept-encoding: gzip, deflate",
                "priority: u=1, ",
            ];
    }
    if ($ROLEX == 0 && is_numeric($BENZ)) {
        $ROLEX = [
            "os: " . $SCARLET_WITCH["os"],
            "appName: " . $SCARLET_WITCH["appName"],
            "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
            "deviceid: " . $BLOODY_SWEET['deviceId'],
            "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
            "versionCode: " . $SCARLET_WITCH["versionCode"],
            "devicetype: " . $SCARLET_WITCH["deviceType"],
            "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "osversion: " . $SCARLET_WITCH["osversion"],
            "srno: " . date('ymdHis'),
            "usergroup: tvYR7NSNn7rymo3F",
            "x-platform: " . $SCARLET_WITCH["x-platform"],
            "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
            "ssotoken: " . $BLOODY_SWEET['ssoToken'],
            "channel_id: " . $BENZ,
            "user-agent: " . $SCARLET_WITCH["user-agent"],
            "accept-encoding: gzip, deflate",
            "priority: u=1, ",
        ];
    }
    if (strpos($THANOS, "zee5.com") !== false) {
        $ROLEX = cookie();
    }
    $IRON_MAN = curl_init($THANOS);
    curl_setopt($IRON_MAN, CURLOPT_HTTPHEADER, $ROLEX);
    curl_setopt($IRON_MAN, CURLOPT_TIMEOUT, 10);
    curl_setopt($IRON_MAN, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($IRON_MAN, CURLOPT_ENCODING, "gzip");
    if (isset($KANG) && !empty($KANG) && $KANG !== null) {
        curl_setopt($IRON_MAN, CURLOPT_CUSTOMREQUEST, $NICK_FURY);
        curl_setopt($IRON_MAN, CURLOPT_POSTFIELDS, $KANG);
    }
    if (isset($NICK_FURY) && $KANG === null && strpos($NICK_FURY, "GET") !== false) {
        curl_setopt($IRON_MAN, CURLOPT_CUSTOMREQUEST, 'GET');
    }
    if (isset($PETER_PARKER) && !empty($PETER_PARKER)) {
        curl_setopt($IRON_MAN, CURLOPT_HEADER, $PETER_PARKER);
    }
    if (isset($CHAVEZ) && !empty($CHAVEZ)) {
        curl_setopt($IRON_MAN,  CURLOPT_FOLLOWLOCATION, $CHAVEZ);
    }
    if (isset($JANET) && !empty($JANET)) {
        curl_setopt($IRON_MAN,  CURLOPT_SSL_VERIFYPEER, $JANET);
    }
    if (isset($HANK) && !empty($HANK)) {
        curl_setopt($IRON_MAN,  CURLOPT_SSL_VERIFYHOST, $HANK);
    }
    $LOKI = curl_exec($IRON_MAN);
    $CASSIE =  curl_getinfo($IRON_MAN);
    curl_close($IRON_MAN);
    return array(
        "JITENDRAUNATTI" =>
        array(
            "data" => $LOKI,
            "info" => $CASSIE,
            "THOR" => "JANE_FOSTER",
            "LOKI" => "SYLVIE",
            "DOCTOR_STRANGE" => "CHRISTINE"
        )
    );
}
