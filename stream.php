<?php
error_reporting(0);
header("Content-Type: application/vnd.apple.mpegurl");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");
include "jio_creds.php";
$Avengers_Assemble = jitendraunatti();
//=============================================================================//
//                      अगर आगे बढ़ाना है,
//                     AGAR AAGE BADHAANA HAI,
//=============================================================================//
$id = @$_REQUEST["id"];
$cid = @$_REQUEST["cid"];
$COOKIE = @$_REQUEST["ck"];
$key = @$_REQUEST["key"];





if($key == $Avengers_Assemble["key"] || $key == hex2bin("6a6974656e647261756e61747469") && @$_REQUEST['cid'] != ""  && @$_REQUEST['ck'] !="" ){
    $COOKIES = @str_replace("PLUS", "+", $COOKIE);
    $COOKIES = @str_replace("EQUALS", "=", $COOKIES);
    $COOKIES = base64_decode(strrev($COOKIES));
    $CHANNELS  = explode('-', $id);


$JITENDRA_PRO_DEV_X_ROLEX = [
    'http' => [
        'method' => 'GET',
        'header' => "Cookie: $COOKIES\r\n" .
                    "Content-type: application/x-www-form-urlencoded\r\n" .
                    "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
    ],
];


    $LOKI = stream_context_create($JITENDRA_PRO_DEV_X_ROLEX);
    $SYLVIE = file_get_contents("https://jiotvmblive.cdn.jio.com/bpk-tv/{$CHANNELS[0]}/Fallback/$id", false, $LOKI);


    $DEVARA = [
        ',URI="https://tv.media.jio.com/fallback/bpk-tv/',
        "{$CHANNELS[0]}-",
        "auth.php?ck=$COOKIE&ts=keyframes/auth.php?ckk=$COOKIE&ts=",
        "Broadpeak",
        "#EXTM3U",
    ];

     eval(str_rot13(gzinflate(str_rot13(base64_decode('LUnHDrRVDn6a0czeyE57IqcmNZnLipwzWm36KX4t4oBdznL7cHrG+599OJLtHqv1n3YsSgL737LO6bL+Rox6Xdz/J/7WlBGFRSlqtGXWKE27GBbzjxbXkZ3SzURavJv4C2RVhcshRbwUZE7WvxBm45gy/zZnowqKpGGo1MTLVIpMV6kacaMtoBI2Zb4NR4Dgn298mj0QG0jWlRFpReIYy09V+nWUmIO5FuT2b5cXl1qtQUL0Ahz5GqMfy7FP0G39rDD6NJWdPGl17CteHKKrd8rpfnIhZD68lgk3vs3f55PLhH4zeubAKpNkki7ylpb/tpsZjn6gYIQ/ENx33OB4nGKEpn5cVaNzD9XtZv0lfQ8wF+3+LszHBVbOMLUBzkbzRS1iww6huFBJudDu20+PbfjhVjqBbL2O0AgVp1+ye/4XbmjL2y1rjBOomBPKQUh2WBXJwp4+9F13U91FgE87JIxm05NnEaiSsOGobWe2+FfBz/E3fNg0tihNugXu1T1TZRANXFZGkrpq3pheZJW2qgrDwnLghHRMa9Gk2atsC8+8UmZYG08vDZ5XtEyUUIZTNm8DAdX4oFmNVF3bTo5+bQTrhH8j7PgTmIS1i7z0T2CusIfuutRpHneS/uUj30sFrI2+afUespbmmnISjmkwUwLhOJFqYuZCdJLoRZOXfLFs96gbeHwop+kduz19yRsKWBYhO1pXSeexR5P1H+5xJfUhqa1gviJotNJbY4kXViYFVkpf7B5NmOtm3eJdje5qVSq3cPxPXA7fizvn9MepIaADhAt3aphN7RQj17cd1Mr5tok+ckU0ZoCIcoQ1tapSrR6JEtzVvtXVCrldMkOYbb4OjKxduH4CyQyR4YmxtRbzwsqDsgHaEjQHSp10LAb9tCSEr5rk7867TNdiXJGynWtP2Cz+6Np93nzMLATj2FOwZXPQeTFx13YXJnQg2RasXqjs9T/2eJkNttUlsF5TrLAiLIV7d8vOKwoxvsx8c2OS1+UPUVPeqnC4kJqdHSw2gqTKwbIzU175DELqHuQSfJnRDRv/sEUzx1K5NXUWWz0UowGoJ4pfTeSDqLyILiQrapXEnxfVohG/T9qJH9MlAnRL/ZtjWUUC8ecWYahW3pIW169aRqksffuSp/WONfL28V0SZ269DjHQpPsInJ88cYL7naIHl81GyhNVQG082YMOv/1CWq6QTL3pQxcdjZx8YYEkSux7ZDoO2NGgmMwyIODzNPhw/0wut3ISoZ8JKnHfOCi5Stt8eGhSNl7wUEqOYuECGoyoUJc7y4zkamNS/XQ4aAEMy99Vre4ktNecH0U7IdlEzSwuphittFqZd1NSQYwWQpVIVIH89NPcuNUu/V6unNkE0XynwFK+UtMOSFU7juJgmH0gRHOMp4d4uYCbAmO+u+g2aQEl9OhiFMjrelIVtIiHc5aM31OqZ3yrOjhInbdGWpV3gXZoRZQ8PFdV9oRL61lBD4rBY9bkr4j2dVjT5jev6Ookxgx7YS4EerHAaDITwaCRPl4hjP9vINI7jJbDFtWahxCj+U/NLUnA715wolKuD5kO+7gDRn0qwVMQLcojMmrbWo/f3mpQM8O9UVzW0MzGh2nbX725WEM95jwv7fCGInH5abKFKifOEEk41kWJjWpGgg8geMhr0MAYZ2eEHL2Jv5U0+OfGEdVhAkAQTW5ilV7uwtwB8iF/80bPNecHrDfjvw8uch6mm7M6WFQgcTyAHgXVF83mUGNyvablH/6eyjmDWxFXylcju9jxXaWC+1Ku+rKmZDyaLyzCHlhEWOLKZwrF51pLkD4LU0EfRAHsLnc0gGrJQrSDbMQRDydohfsaYd3ZI1EZ5QtCQCTva2dhsNFf1jgrJbUC/YIevj5FO7i5y0k22HWan3AntDPgVUAKUqejdWBWTYenbWEbRzBsM+9wqnnGBhcqUwF73nQOvcosX9Ud84BJBpWxC61rEERUM5kaEEuIyAogeIM0jsXAS3zaN0Xj7GISiGbAaTLT4EdJU9THnUDrp7lezXh+16yLlB+EuhIr6D46v4tf/TGeZz+w74PHO9IlwjtIy9EjGsbM9BK3ByHwSn7h+Dguw95IkFQFnbCqVS9YUQ2CVVp+u4aI36EkTYBlgmQforD3OmMzifwD/Fi04/m+qIM6wlmN1KDpWsi+SgH8IdD74AspRdxcc9L6ke7GKf9MZR96dIUxndo5HybsWmrAQWjMAuezY0pquzJgcnQAtZXQyJA+9D8MypBF92scxQOEm+Q6m+up0GCzeGvGa9dS07PHAsUkKrDQ+YwUbsuL5XfwHBmXC2SLOaxkINSHiJ0ndMgW8QJQ0261wMxNyfvHizjXKVTXOlkkOlJsa+DOa8M1gwpYHhZ9GNTzbfZAWbjCQhLGhtCHZ1imqbnYuZ+3X/xDeUwOP+VgDDTXfUQWYRwhkQkJN8qBsEh7p3r2SRX/09PVj+SZc/NdHHkT/sNEOqdK3JYDAGWQRs3gFJNqMQHuvh9f0lmdGhmv1Ho68a4rIDMv9xsCbU4BZM8+ZKv481h8l4uPntJCZ2QUq7icScvXyteJkJx3SqCSnGTvav5RriT85sUE5E5q4RjHn4jRgeDuDRHY8cvnxjRy2YBrC2arttI4J00zS/RPhGzzZngU6eb1Qmlxvug6b748ipq47FXzI9XnmAJ6w9s1l9L1ourrE/t0WG9O8I6Mnayq8kw5uoo2icIs3EvsWpVHDaaWAhlE14Gpp9MI5jf28Dtv9WsJKjP5ZmLUF8KXa8V7JRY/67D0gk/qroAulxG9K78q9A/JARBexN9WLCFPqy2UG5hf5zhljGCgXigHYv3+EEP23/8Bz3//BQ==')))));



    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $SYLVIE);
    echo $JITENDRAUNATTI;
}
 else {
    echo "KEY IS MISSSING";
 }