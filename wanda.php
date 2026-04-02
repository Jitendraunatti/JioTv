<?php
require_once 'jitendraunatti.php';
//=============================================================================//
//                      अगर आगे बढ़ाना है,
//                     AGAR AAGE BADHAANA HAI,
//=============================================================================//
$token = $SCARLET_WITCH['JITENDRA_UNIVERSE']['token'];
sendM3U8HeadersAdvanced();
if (isset($_REQUEST['thor']) && isset($_REQUEST['jane_foster']) && $_REQUEST['hls'] && $_REQUEST['token']) {
    header("Content-Type: application/vnd.apple.mpegurl");
    $DOCTOR_STRANGE = jitendraunatti(str_replace(".jitendraunatti", ".m3u8",  scarlet_witch("decrypt", $_REQUEST['hls'])), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    $JPD = explode("\n", $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    $VISION = str_replace(basename(scarlet_witch("decrypt", $_REQUEST['hls'])), '', scarlet_witch("decrypt", $_REQUEST['hls']));
    $CASSIE = '';
    foreach ($JPD as $ROLEX) {
        if (empty($ROLEX)) continue;
        if (strpos($ROLEX, 'URI="') !== false) {
            $CASSIE .= str_replace('URI="', 'URI="wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&id=' . $_REQUEST['id'] . '&jane_foster=' . $VISION . '&thor=' . $_REQUEST['thor'] . '&pkey=', $ROLEX) . "\n";
        } elseif (strpos($ROLEX, '.ts') !== false && strpos($ROLEX, '#') === false) {
            $CASSIE .= 'wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&jane_foster=' . scarlet_witch("encrypt", $VISION) . '&marvel=' . scarlet_witch("encrypt", $VISION . $ROLEX) . "\n";
        } else {
            $CASSIE .= $ROLEX . "\n";
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

    exit(trim(str_replace(["#EXTM3U", ".ts"], ["#EXTM3U\n#DEVELOPED_BY_{$SCARLET_WITCH['JITENDRA_UNIVERSE']["x-developed-by"]}\n#AUTHOR-{$SCARLET_WITCH['JITENDRA_UNIVERSE']["token"]}", ".jitendraunatti"], $CASSIE)));
} elseif (isset($_REQUEST['thor']) && isset($_REQUEST['jane_foster']) && $_REQUEST['pkey'] && $_REQUEST['token']) {
    $DOCTOR_STRANGE = jitendraunatti($_REQUEST['pkey'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    echo $DOCTOR_STRANGE['JITENDRAUNATTI']['data'];
} elseif (isset($_REQUEST['thor']) && isset($_REQUEST['jane_foster']) && $_REQUEST['marvel'] && $_REQUEST['token']) {
    header("Content-Type: video/mp2t");
    $DOCTOR_STRANGE = jitendraunatti(str_replace(".jitendraunatti", ".ts", scarlet_witch("decrypt", $_REQUEST['marvel'])), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    echo $DOCTOR_STRANGE['JITENDRAUNATTI']['data'];
} else {
    echo video();
    echo "#I AM IN ELSE PART";
}
