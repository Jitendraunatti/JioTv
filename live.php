<?php
require_once 'jitendraunatti.php';
header("Content-Type: application/vnd.apple.mpegurl");
//=============================================================================//
//                       स्याही से नहीं बढ़ेगी.
//                    SYAAHEE SE NAHIN BADHEGEE.
//=============================================================================//
$id = @$_REQUEST['id'];
$token = @$_REQUEST['token'];
$CASSIE = "";
if (@strlen($id) <= 4 && is_numeric($id) && $token  === base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d"))) {
    $cache_file = $DARK_SIDE . '/channel_' . $id . '.jitendraunatti';
    $use_cache = false;
    if ($SCARLET_WITCH['JITENDRA_UNIVERSE']['live_cache']) {
        if (file_exists($cache_file)) {
            $cache_data = json_decode(scarlet_witch("decrypt", file_get_contents($cache_file)), true);
            $m3u8_url = $cache_data['result'] ?? '';
            if (!empty($m3u8_url)) {
                preg_match('/~exp=(\d+)/', $m3u8_url, $matches);
                $expiry_time = isset($matches[1]) ? (int)$matches[1] : 0;
                if ($expiry_time > (time() + 30)) {
                    $CHRISTINE = $cache_data;
                    $use_cache = true;
                }
            }
        }
    }
    if (!$use_cache) {
        $KANG = 'stream_type=Seek&channel_id=' . $id;
        $ROLEX = [
            'User-Agent: ' . $SCARLET_WITCH['api_endpoint_static_value']["User-Agent-OkHttp"],
            'Content-Type: application/x-www-form-urlencoded',
            'appkey: ' . $SCARLET_WITCH['api_endpoint_static_value']["appkey"],
            "devicetype: " . $SCARLET_WITCH['api_endpoint_static_value']["deviceType"],
            "os: " . $SCARLET_WITCH['api_endpoint_static_value']["os"],
            'deviceid: ' . $STARK_INDUSTRIES['data']['deviceId'],
            "versionCode: " . $SCARLET_WITCH['api_endpoint_static_value']["versionCode"],
            "osversion: " . $SCARLET_WITCH['api_endpoint_static_value']["osversion"],
            'dm: ' . $SCARLET_WITCH['api_endpoint_static_value']["dm"],
            "x-platform: " . $SCARLET_WITCH['api_endpoint_static_value']["x-platform"],
            "uniqueid: " . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['unique'],
            'usergroup: ' . $SCARLET_WITCH['api_endpoint_static_value']["usergroup"],
            'languageid: 6',
            'userid: ril' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
            'sid: ' . $STARK_INDUSTRIES['data']['analyticsId'],
            'crmid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
            'isott: ' . $SCARLET_WITCH['api_endpoint_static_value']["isott"],
            'channel_id: ' . $id,
            'langid: ',
            'camid: ',
            'accesstoken: ' . json_decode(jio_tv_refreshtoken_generate(), true)['authToken'],
            'ssotoken: ' . $STARK_INDUSTRIES['data']['ssoToken'],
            'subscriberid: ' . $STARK_INDUSTRIES['data']['sessionAttributes']['user']['subscriberId'],
            'lbcookie: 1',
        ];

        $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($SCARLET_WITCH['jiotv_api']["geturl"])), $ROLEX, "POST", $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
        $CHRISTINE = json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);

        if (isset($CHRISTINE['code']) && $CHRISTINE['code'] == 200) {
            // if (!is_dir($cache_file)) mkdir($cache_file, 0777, true);
            file_put_contents($cache_file, scarlet_witch("encrypt", $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]));
        }
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

    if ($CHRISTINE['code'] ===  200 && ($CHRISTINE['message'] === 'success' || $CHRISTINE['message'] === 'Success') && !empty($CHRISTINE['result'])) {
        sendM3U8HeadersAdvanced();
        $WANDA = explode('/', $CHRISTINE['result']);
        $NATASHA = explode('?', $CHRISTINE['result']);
        $DOCTOR_STRANGE = jitendraunatti($CHRISTINE['result'],  0, 'GET',  null, 1, 0, 0, 0, 0, 0, $_REQUEST['id'], null);
        $CHRISTINE =  cookie_fetecher($DOCTOR_STRANGE['JITENDRAUNATTI']['THOR'], json_encode($CHRISTINE),  $_REQUEST['id']);
        $JPD = explode("\n", $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
        $VISION = str_replace(basename($NATASHA[0]), '', $NATASHA[0]);
        $CASSIE = '';
        foreach ($JPD as $ROLEX) {
            if (empty($ROLEX)) continue;
            if (strpos($ROLEX, 'URI="') !== false) {
                $CASSIE .= str_replace('URI="', 'URI="wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&id=' . $_REQUEST['id'] . '&jane_foster=' .  scarlet_witch("encrypt", $VISION) . '&thor=' . bin2hex(base64_encode($CHRISTINE)) . '&pkey=' . $VISION, $ROLEX) . "\n";
            } elseif (strpos($ROLEX, '.m3u8') !== false && strpos($ROLEX, '#') === false) {
                $CASSIE .= 'wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' . bin2hex(base64_encode($CHRISTINE)) . '&id=' . $_REQUEST['id'] . '&jane_foster=' .  scarlet_witch("encrypt", $VISION) . '&hls=' . scarlet_witch("encrypt", $VISION . $ROLEX) . "\n";
            } else {
                $CASSIE .= $ROLEX . "\n";
            }
        }
        exit(trim(str_replace(["#EXTM3U", ".m3u8"], ["#EXTM3U\n#DEVELOPED_BY_{$SCARLET_WITCH['JITENDRA_UNIVERSE']["x-developed-by"]}\n#AUTHOR-{$SCARLET_WITCH['JITENDRA_UNIVERSE']["token"]}", ".jitendraunatti"], $CASSIE)));
    } else {
        echo video();
        echo "#something went wrong when hit api url";
    }
} else if (strpos($_REQUEST["id"], "zee5.com") !== false || (strpos($_REQUEST["ts"], "zee5.com") !== false || strpos($_REQUEST["tss"], "zee5.com") !== false) && ($_REQUEST["key"] === hex2bin(base64_decode("NGE0OTU0NDU0ZTQ0NTI0MTVmNGI1NTRkNDE1Mg")) && $_REQUEST["token"] === base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")))) {
    $JITENDRAUNATTI = jitendraunatti($_REQUEST["id"] ?: $_REQUEST["ts"] ?: $_REQUEST["tss"], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, null, null)['JITENDRAUNATTI']['data'];
    echo $_REQUEST["id"] ? str_replace("master", $CASSIE . "?token=" . base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")) . "&key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&rolex=" . str_replace(["master", "index-connected"], ["", ""], explode(".m3u8", $_REQUEST["id"])[0]) . "&ts=" . str_replace(["master", "index-connected"], ["", ""], explode(".m3u8", $_REQUEST["id"])[0]) . "master", $JITENDRAUNATTI) : ($_REQUEST["tss"] ? $JITENDRAUNATTI : str_replace("master", $CASSIE . "?token=" . base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")) . "&key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&tss=" . $_REQUEST["rolex"] . "master", $JITENDRAUNATTI));
} else {
    echo   video();
    echo "#i am inn else code";
}
