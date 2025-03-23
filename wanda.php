<?php
include('jitendraunatti.php');
//=============================================================================//
//                      अगर आगे बढ़ाना है,
//                     AGAR AAGE BADHAANA HAI,
//=============================================================================//
if (isset($_REQUEST['wanda']) && isset($_REQUEST['thor']) && isset($_REQUEST['jane_foster'])) {
    $DOCTOR_STRANGE = jitendraunatti($_REQUEST['jane_foster'] . str_replace(".jitendraunatti", ".m3u8", $_REQUEST['wanda']), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    if ($SCARLET_WITCH['proxy'] === 'ON') {
        echo str_replace([$_REQUEST['groot'] . '-audio', ',URI="https://tv.media.jio.com/fallback', ".ts"], ['wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&ts=' . $_REQUEST['jane_foster'] . $_REQUEST['groot'] . '-audio', ',URI="wanda.php?token=' . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . '&thor=' . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&pkey=https://tv.media.jio.com/fallback', ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    } else {
        echo str_replace([$_REQUEST['groot'] . '-audio', ',URI="https://tv.media.jio.com/fallback', '.ts'], [$_REQUEST['jane_foster'] . $_REQUEST['groot'] . '-audio', ',URI="wanda.php?thor=' . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&pkey=https://tv.media.jio.com/fallback', '.ts?' . base64_decode(hex2bin($_REQUEST['thor']))], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    }
} elseif (isset($_REQUEST['hls']) && isset($_REQUEST['thor'])) {
    $DOCTOR_STRANGE = jitendraunatti($_REQUEST['jane_foster'] . str_replace(".jitendraunatti", ".m3u8", $_REQUEST['hls']), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    if ($SCARLET_WITCH['proxy'] === 'ON') {
        echo str_replace(["67597C480000", ".ts"], ["wanda.php?token=" . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . "&thor=" . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&ts=' . $_REQUEST['jane_foster'] . '67597C480000', ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    } else {
        echo str_replace(["67597C480000", ".ts?"], [$_REQUEST['jane_foster'] . '67597C480000', ".ts?" . base64_decode(hex2bin($_REQUEST['thor'])) . '&'], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    }
} elseif (isset($_REQUEST['marvel']) && isset($_REQUEST['thor'])) {
    $DOCTOR_STRANGE = jitendraunatti($_REQUEST['jane_foster'] . str_replace(".jitendraunatti", ".m3u8", $_REQUEST['marvel']), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    if ($SCARLET_WITCH['proxy'] === 'ON') {
        echo str_replace([$_REQUEST['groot'], ".ts"], ["wanda.php?token=" . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . "&thor=" . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&ts=' . $_REQUEST['jane_foster'] . $_REQUEST['groot'], ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    } else {
        echo str_replace([$_REQUEST['groot'], ".ts"], [$_REQUEST['jane_foster'] . $_REQUEST['groot'], ".ts?" . base64_decode(hex2bin($_REQUEST['thor']))], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
    }
} else if (!empty($_REQUEST['pkey']) || (!empty($_REQUEST['ts'])  && $_REQUEST["token"] === base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")))) {
    if (!empty($_REQUEST['pkey'])) {
        $DOCTOR_STRANGE = jitendraunatti($_REQUEST['pkey'], 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
        echo $DOCTOR_STRANGE['JITENDRAUNATTI']['data'];
    }
    if (!empty($_REQUEST['ts']) && $_REQUEST["token"] === base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d"))) {
        $DOCTOR_STRANGE = jitendraunatti(str_replace(".jitendraunatti", ".ts", $_REQUEST['ts']), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
        echo $DOCTOR_STRANGE['JITENDRAUNATTI']['data'];
    }
} elseif (isset($_REQUEST['sony']) && isset($_REQUEST['thor'])) {
    $DOCTOR_STRANGE = jitendraunatti($_REQUEST['jane_foster'] . str_replace(".jitendraunatti", ".m3u8", $_REQUEST['sony']), 0, 'GET',  null, 0, 0, 0, 0, 0, 0, $_REQUEST['id'], $_REQUEST['thor']);
    echo str_replace(["segment", ".ts"], ["wanda.php?token=" . base64_decode(hex2bin("536b6c5552553545556b46665331564e5156493d")) . "&thor=" . $_REQUEST['thor'] . '&id=' . $_REQUEST['id'] . '&ts=' . str_replace(basename($_REQUEST['jane_foster'] . $_REQUEST['sony']), "", $_REQUEST['jane_foster'] . $_REQUEST['sony']) . 'segment', ".jitendraunatti"], $DOCTOR_STRANGE['JITENDRAUNATTI']['data']);
} else {
    echo video();
    echo "#I AM IN ELSE PART";
}
