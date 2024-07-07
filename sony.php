<?php
include "jio_creds.php";
error_reporting(0);
header("Content-Type: application/vnd.apple.mpegurl");
$BLOODY_SWEET = json_decode(jio_data(), true);
$analyticsId = $BLOODY_SWEET['analyticsId'];
$ssoToken = $BLOODY_SWEET['ssoToken'];
$access_token = $BLOODY_SWEET['authToken'];
$subscriberId = $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'];
$uniqueId = $BLOODY_SWEET['sessionAttributes']['user']['unique'];
$device_id = $BLOODY_SWEET['deviceId'];
$id = $_GET['id'];
$hls = @$_REQUEST["hls"];
$COOKIE = @$_REQUEST["ck"];
$COOKIES = str_replace(["PLUS", "EQUALS"], ["+", "="], $COOKIE);
$COOKIE = base64_decode(strrev($COOKIES));
$CHANNELS = @$_REQUEST["cid"];
$JITENDRA_PRO_DEV_X_ROLEX = [
    'http' => [
        'method' => 'GET',
        'header' => "Cookie: $COOKIE\r\n" .
                    "os: android\r\n" .
                    "appname: RJIL_JioTV\r\n" .
                    "subscriberid: $subscriberId\r\n" .
                    "accesstoken: " . jio_tv_re_use_refreshtoken_generate() . "\r\n" .
                    "deviceid: $device_id\r\n" .
                    "userid: ril$subscriberId\r\n" .
                    "versioncode: 353\r\n" .
                    "devicetype: phone\r\n" .
                    "crmid: $subscriberId\r\n" .
                    "osversion: 13\r\n" .
                    "srno: 240707471030\r\n" .
                    "usergroup: tvYR7NSNn7rymo3F\r\n" .
                    "x-platform: android\r\n" .
                    "uniqueid: $uniqueId\r\n" .
                    "ssotoken: $ssoToken\r\n" .
                    "channelid: $id\r\n" .
                    "priority: u=1, i\r\n" .
                    "User-Agent: plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7",
    ],

];


    $LOKI = stream_context_create($JITENDRA_PRO_DEV_X_ROLEX);
    $SYLVIE = file_get_contents("$hls", false, $LOKI);
    $CHANNELS_SONY = explode("/",$hls);
    $SONY_CHANNELS = explode("_",$CHANNELS_SONY[5]);


    $DEVARA = [
        "WL/$SONY_CHANNELS[1]",
        "sonyliv_splash_",
        "#EXTM3U",

    ];

    $CHANNELS_SONY = explode("/",$hls);
    $COOKIE = strrev(base64_encode($COOKIE));
    $COOKIE = str_replace("+", "PLUS", $COOKIE);
    $COOKIE = str_replace("=", "EQUALS", $COOKIE);

    eval(str_rot13(gzinflate(str_rot13(base64_decode('LUnHEoQ2Ev0al7034gC1J+KQZr55wZBmQV9ibu/URwvRRbck+r2npR7uv7b+VdZ7KJe/xqFLPtj/5nJX5+WvfHWq/P5/50JSk+G8kGhb5P5AnAC7p8e+bPOM+wp7b5jsVle54fJT6DLI+XRAqpHdk6SCpHpS0NzP8Jwl8D8Qg/z8nmu+MxBypICBVGAymiM8nQgQGGfcAQoGmusnqJ4PqaxVS2NYjhD5GA919275NITaOgmeFZ4cDqG7OEqcUKYhckPt7Oc6bg6idSAXed5545SmbiBHOBCmjWltkLJ5QPBHstLfxsvRuVtBweUO2qVGVJ7D3VejAkVs3Zs1zzcioZQwf7PNWA2v6bc0hE/hxGfQVW5nhSxWXLrQY5OgYweStpws+JOVs1LitZpOVbHuErwt8KpCnViaH71h1nyTxDsYXIQLip7nQuvTBY68PXXQSLIrfIPA0ljS48FkOZaM+f46zn3DrIUdJiEJCbHZUS5OhB69EoTXlhXK17KgyZhueG2sN0XLgJk3xW7+HrDYPGjhz/WazEpwlFx+fAm8IAXCSuDQnDfLQ7nbhmKJOgrBQpNmg1OYHVoJOysGRva1YMQJ9RChs4KHAllSx4+mBKzh2tpaaVEupPHTd9TXTYVVyGCisd0ejGYIqX9NqO9F/SPv4a36NM2SqXozVnUHzXd7kAeZPpP76M6t+AWt4hQE7tM2QsUx3+p0GTxZD8jPcYv+04PEl3Xac34Meit9o7rSrDQTcI0f2fKKxqf8aeOJu6RBc+4YgPxZwLVUtfqg2gyZ7mz/BA+xWCTKczJqVqlSPe7mgOexNu4C5DsH5xCm9Bj2u3yjdqTPjywdsp6Kjgg2/eeG5fcD3elFgeiOn1Efh50Mkpvl7+R7kYMEBAkmHinWa7Ty5Oh+jNjarQkOz6He6r4IvOoS+6mBKf466UpAbOhMtZXq+m8Nyt8Y+Kzvmy1XYhE1Tt9RakLFC1ngLyonRwlGyPyZ0vjujy98vmtsN8Vd9+nz/rOJp7fakbWn3Si3Hzi8YsTeVg3PLMeZzzq1aGhsHi7uy88ctUvckbZJHCAMfXdkJ96by1VIMqsKafaOELky6a5kk5dhs10s9S3xIsEicOztZlHihjosFn+WsBBzADojaoEBsYSPTfOeSEm1PUeXO8uHoUkSJCrqir6Yn9qZ8MRfWzYvd7jdpaHR+j1uzaYlcrtOO/o7VoTANzd238AtWI8S4kMf+67BWDvgVcVLqs05qOk9YTZ4MyhqbeiByig5RaKVrwlaL6/61nTDyHSLuWSLQjaYHOKWSj3IYUG6PVycuXoLIbSxDXRjXKRpeOWWdI/bWmBGfodV7zHdcQseExcASMbXnA7rRdMtS34Ukf1rD9m50A6HMjZRlEh+sXqBbo9IWnmwJ8yhD0oqJZ8ZFq1B6njHrOXz3fTzOSVP9AEFGt5bqY6jozCvicFM1PsGxXbHFzn+jVvqS3W1rW2KAqtrtLnfsm9uF+IluCOWaAG0mSFUyobqjk1w6zwucY9z2afxhAiEYbpB8eCpSTFZGDVm+2zcYzGXUJINnyx+OYyTAGuITKseKZh1WtR6sk+aTooEJp2I6TNM+rTe7Hzz4footDNEUmm+pco+wFUoulEpqjHSdWRzYJ3Z7b77RnDnHyb7ZWcfRpFi1nVQhLQeDL0PXkp7fKklTExC0NJWgJ0dhbwAxyNR5tyew6OT64gWzmUgQKlgm4xuGaob4OwncQMEdmETzUUhragLntQsxcT+GdKBNPRoM56Nwp8Tige7IG4elCE8AsZmqh/1rvirtR6RIDGLxWayj4LdSu79yXHRPX5mp+nyYbNRRlqTkrTJgPT3z2Tw+6uVAfGY2RcxAneSXgYlLUwlI/LG5mkZpWUjjY+5T1Lplm9b3Pw6qRvMiFpmwZH8oDvMhysklW55dVYgUL8vBI2T0usWHvfTb1BF5DXEwzrZ2ijubOYS7P/GWcePWxQUS/+ESjN/lesC5NsxNto8naLmGHk6aNMWuDJJK4/Y0A+Xa/rF4XTrlzTI1ZKKV34sqmjdGSWgX73FFmRHRn8cXvSkbIEZ78MnHzal8yTBelFPxzHGnQ9kVJ6imss915ayjRNus2kHTDlZ6Q5p6p7AYWCKqko+ZKnZl6cfOW3QtPbU9eXuULiMkxRf0NHDHsLPUJwekjJZ0aMbX0ZkPxMShuZX1VPE9Hf/rmtdhQGx8eGDs451QU9BAxq25BEB3FYmr4n1XMEZ9BtcWy9QOATT4mY8ucHLPKi7DeJn8B/RzV+RhZhmfvXOsgNoD06Jf2o+M2Wo6HneRmNs28pvSg3KUdvN/QCKSjjUpC36Jr4tGm6LNXrkUItydPmx+vlUOJ2avmMB0+d4+vqznopkZX0HehSoNTZSvN3P2KYmxAF2jai1cuGOpM7uiDPrDbMhS6FgXtqWgTuY2KFSHesL+j+4jU6joi2r7Zj+fqYeXz8NMuVGP757+aSFIWdrJiJ5oc7e+8VZ72G/TZ1qoKaTOT3jxXzvPt6rXr2fp89zOhODCulFFPzLBUfpsfhin+VTfu9kNMszqw2bkYo5o1cFh+gfo946AcnmNJJt9aJPS6fJGYkQZvts1RP9Hraw1qWcS8uvJvbjeK5mMqCtwgXPTjSNazZ0vdku/xITK/1pUDiJCjYNN9YLSqzsk02LYK8u4GoIysR7vFT/vZKQw7/6Aey6gknX/0At8P/zP+D3378B')))));



    $JITENDRAUNATTI = str_replace($DEVARA, $LEO, $SYLVIE);
    echo $JITENDRAUNATTI;