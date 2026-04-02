<?php
header("Content-Type: text/plain");
require_once 'jitendraunatti.php';
$jioResponse = file_get_contents($SCARLET_WITCH['api_endpoint']['live_channels']);
$jioData = json_decode($jioResponse, true);
$jioChannels = $jioData['result'] ?? [];
$zeeResponse = file_get_contents($SCARLET_WITCH['zee_api']['web_api']);
$zeeChannels = json_decode($zeeResponse, true) ?? [];
$categories = $SCARLET_WITCH['channelCategoryMapping'] ?? [];
$languages = $SCARLET_WITCH['languageIdMapping'] ?? [];
$zeeLangMap = [
    "hi" => "Hindi",
    "en" => "English",
    "mr" => "Marathi",
    "ta" => "Tamil",
    "te" => "Telugu",
    "kn" => "Kannada",
    "ml" => "Malayalam",
    "bn" => "Bengali",
    "gu" => "Gujarati",
    "pa" => "Punjabi",
    "or" => "Odia",
    "bh" => "Bhojpuri",
    "ur" => "Urdu"
];
echo '#EXTM3U x-tvg-url="https://tsepg.cf/epg.xml.gz"' . PHP_EOL;
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$directory = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseUrl = $protocol . "://" . $host . $directory . "/";
foreach ($jioChannels as $channel) {
    $id = $channel['channel_id'] ?? '';
    $name = $channel['channel_name'] ?? 'Unknown';
    $logo = "https://jiotvimages.cdn.jio.com/dare_images/images/" . ($channel['logoUrl'] ?? '');
    $catId = $channel['channelCategoryId'] ?? '';
    $langId = $channel['channelLanguageId'] ?? '';
    $group = ($categories[$catId] ?? 'General') . " (JioTV)";
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

    $lang = $languages[$langId] ?? 'Hindi';
    $playbackUrl = $baseUrl . "live.m3u8?id=" . $id . "&token=" . $SCARLET_WITCH['JITENDRA_UNIVERSE']['token'];
    printf(
        '#EXTINF:-1 tvg-id="%s" tvg-logo="%s" group-title="%s" tvg-language="%s", %s' . PHP_EOL,
        $id,
        $logo,
        $group,
        $lang,
        $name
    );
    echo $playbackUrl . PHP_EOL;
}
foreach ($SCARLET_WITCH['addon_service'] as $addone) {
    if (isset($addone)) {
        echo file_get_contents($addone);
    }
}
foreach ($zeeChannels as $zee) {
    $name = $zee['name'] ?? 'Zee Channel';
    $logo = $zee['logo'] ?? '';
    $group = ($zee['genres'] ?? 'Entertainment') . " (Zee5)";
    $langCode = $zee['languages'] ?? 'hi';
    $lang = $zeeLangMap[$langCode] ?? "Hindi";
    $rawLink = $zee['link'] ?? '';
    $playbackUrl = $baseUrl . "live.m3u8?id=" . $rawLink . "&token=" . $SCARLET_WITCH['JITENDRA_UNIVERSE']['token'];
    printf(
        '#EXTINF:-1 tvg-id="%s" tvg-logo="%s" group-title="%s" tvg-language="%s", %s' . PHP_EOL,
        $zee['id'] ?? '',
        $logo,
        $group,
        $lang,
        $name
    );
    echo $playbackUrl . PHP_EOL;
}
