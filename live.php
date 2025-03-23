<?php
include('jitendraunatti.php');
//=============================================================================//
//                       स्याही से नहीं बढ़ेगी.
//                    SYAAHEE SE NAHIN BADHEGEE.
//=============================================================================//
if (!($_REQUEST["token"] == base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) || $_REQUEST["token"] == base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")))) {
    exit(video());
}
if (!file_exists("$DARK_SIDE/login_token.jitendraunatti") || empty(file_get_contents("$DARK_SIDE/login_token.jitendraunatti")) || !isset($BLOODY_SWEET["authToken"])) {
    exit(video());
}
$CASSIE = "";
if (strlen($_REQUEST['id']) <= 4 && is_numeric($_REQUEST["id"]) && $_REQUEST["token"] === base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d"))) {
    $KANG = 'stream_type=Seek&channel_id=' . $_REQUEST['id'];
    $ROLEX = [
        'User-Agent: ' . $SCARLET_WITCH['User-Agent'],
        'Accept-Encoding: gzip',
        'Content-Type: application/x-www-form-urlencoded',
        'appkey: NzNiMDhlYzQyNjJm',
        'devicetype: ' . $SCARLET_WITCH['deviceType'],
        'os: ' . $SCARLET_WITCH['os'],
        'deviceId: ' . $BLOODY_SWEET['deviceId'],
        'versionCode: ' . $SCARLET_WITCH['versionCode'],
        'osversion: ' . $SCARLET_WITCH['osversion'],
        'dm: ' . $SCARLET_WITCH['model'],
        'uniqueid: ' . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
        'usergroup: tvYR7NSNn7rymo3F',
        'languageid: 6',
        'userid: ' . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
        'sid: ' . $BLOODY_SWEET['analyticsId'],
        'crmid: ' . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
        'isott: false',
        'channel_id: ' . $_REQUEST['id'],
        'langid: ',
        'camid: ',
        'accesstoken: ' . jio_tv_re_use_refreshtoken_generate(),
        'ssotoken: ' . $BLOODY_SWEET['jToken'],
        'subscriberid: ' . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
        'lbcookie: 1',
    ];
    $DOCTOR_STRANGE = jitendraunatti(base64_decode(hex2bin($TONY_STARK["geturl"])), $ROLEX, 'POST', $KANG, 0, 0, 0, 0, 0, 0, 0, 0);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE['JITENDRAUNATTI']['data'], true);
    file_get_contents("https://jiotv-log-service.developed-by-asur.workers.dev/?log=" . $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    if ($CHRISTINE['code'] == 419 && $CHRISTINE['message'] === 'Token is expired') {
        jio_tv_refreshtoken_generate();
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit();
    } else if ($CHRISTINE['code'] ===  200 && ($CHRISTINE['message'] === 'success' || $CHRISTINE['message'] === 'Success') && !empty($CHRISTINE['result'])) {
        $WANDA = explode('/', $CHRISTINE['result']);
        $NATASHA = explode('?', $CHRISTINE['result']);
        $VISION = str_replace(basename($NATASHA[0]), '', $NATASHA[0]);
        if ($WANDA[5] === 'Fallback') {
            $DOCTOR_STRANGE = jitendraunatti($CHRISTINE['result'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], null);
            $CHRISTINE =  cookie_fetecher($CHRISTINE['result'],  $_REQUEST['id']);
            echo str_replace([$WANDA[4] . '-audio', ',URI="', "#EXTM3U", ".m3u8"], ['wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' .  bin2hex(base64_encode($CHRISTINE)) . '&jane_foster=' . $VISION . '&id=' . $_REQUEST['id'] . '&groot=' . $WANDA[4] . '&wanda=' . $WANDA[4] . '-audio', ',URI="wanda.php?thor=' .  bin2hex(base64_encode($CHRISTINE)) . '&jane_foster=' . $VISION . '&id=' . $_REQUEST['id'] . '&groot=' . $WANDA[4] . '&wanda=', "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR", ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
        } elseif ($WANDA[5] === 'HLSPartner') {
            $DOCTOR_STRANGE = jitendraunatti($CHRISTINE['result'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], null);
            $CHRISTINE =  cookie_fetecher($CHRISTINE['result'],  $_REQUEST['id']);
            echo str_replace([$WANDA[4], "#EXTM3U", ".m3u8"], ['wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' .  bin2hex(base64_encode($CHRISTINE)) . '&jane_foster=' . $VISION . '&id=' . $_REQUEST['id'] . '&groot=' . $WANDA[4] . '&hls=' . $WANDA[4], "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR", ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
        } elseif ($WANDA[3] === $WANDA[5]) {
            $DOCTOR_STRANGE = jitendraunatti($CHRISTINE['result'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], null);
            $CHRISTINE =  cookie_fetecher($CHRISTINE['result'],  $_REQUEST['id']);
            echo str_replace([$WANDA[3], "#EXTM3U", ".m3u8"], ['wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' .  bin2hex(base64_encode($CHRISTINE)) . '&jane_foster=' . $VISION . '&id=' . $_REQUEST['id'] . '&groot=' . $WANDA[3] . '&marvel=' . $WANDA[3], "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR", ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
        } elseif ($WANDA[2] === "gec-007-jc.slivcdn.com" || "HLS" === $WANDA[3]) {
            $DOCTOR_STRANGE = jitendraunatti($CHRISTINE['result'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], null);
            $CHRISTINE =  cookie_fetecher($CHRISTINE['result'],  $_REQUEST['id']);
            echo str_replace(["WL2", "#EXTM3U", ".m3u8"], ['wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' .  bin2hex(base64_encode($CHRISTINE)) . '&jane_foster=' . $VISION . '&id=' . $_REQUEST['id'] . '&groot=' . $WANDA[3] . '&sony=WL2', "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR-JITENDRA-KUMAR", ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
        } else {
            echo video();
            echo "#Response is OK, but result not found.";
        }
    } else {
        echo video();
        echo "#something went wrong when hit api url";
    }
} else if (strpos($_REQUEST["id"], "zee5.com") !== false || (strpos($_REQUEST["ts"], "zee5.com") !== false || strpos($_REQUEST["tss"], "zee5.com") !== false) && ($_REQUEST["key"] === hex2bin(base64_decode("NGE0OTU0NDU0ZTQ0NTI0MTVmNGI1NTRkNDE1Mg")) && $_REQUEST["token"] === base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")))) {
    $JITENDRAUNATTI = jitendraunatti($_REQUEST["id"] ?: $_REQUEST["ts"] ?: $_REQUEST["tss"], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, null, null)['JITENDRAUNATTI']['data'];
    echo $_REQUEST["id"] ? str_replace("master", $CASSIE . "?token=" . base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")) . "&key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&rolex=" . str_replace(["master", "index-connected"], ["", ""], explode(".m3u8", $_REQUEST["id"])[0]) . "&ts=" . str_replace(["master", "index-connected"], ["", ""], explode(".m3u8", $_REQUEST["id"])[0]) . "master", $JITENDRAUNATTI) : ($_REQUEST["tss"] ? $JITENDRAUNATTI : str_replace("master", $CASSIE . "?token=" . base64_decode(hex2bin("524539445645395358314e55556b464f5230553d")) . "&key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&tss=" . $_REQUEST["rolex"] . "master", $JITENDRAUNATTI));
} else {
    video();
    echo "#i am inn else code";
}
