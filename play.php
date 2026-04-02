<?php
require_once "jitendraunatti.php";
$id = $_GET['id'];
$cid = $_GET['cid'];
$ROLEX  = $SCARLET_WITCH["meta_data"] ?? [];
function e($str)
{
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= e(str_replace(["_",'.png'], " ", $cid)) ?> | JIOTV+</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://jiotvimages.cdn.jio.com/dare_images/images/<?= $cid ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #000;
            font-family: Poppins;
        }
        video,
        .plyr,
        .plyr__video-wrapper {
            width: 100vw;
            height: 100dvh;
        }

        video,
        .plyr {
            position: fixed;
            top: 0;
            left: 0;
        }

        .plyr {
            margin: 0 !important;
        }

        video {
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Loader */
        .loading {
            position: fixed;
            inset: 0;
            background: #000;
            z-index: 9999;
        }

        .loading-text {
            position: absolute;
            inset: 0;
            margin: auto;
            text-align: center;
            height: 100px;
            line-height: 100px;
        }
        .loading-text span {
            display: inline-block;
            margin: 0 5px;
            color: #00b3ff;
            font-family: 'Quattrocento Sans', sans-serif;
        }
        .loading-text span:nth-child(1) {
            animation: blur-text 1.5s 0s infinite linear alternate;
        }

        .loading-text span:nth-child(2) {
            animation: blur-text 1.5s 0.15s infinite linear alternate;
        }

        .loading-text span:nth-child(3) {
            animation: blur-text 1.5s 0.3s infinite linear alternate;
        }

        .loading-text span:nth-child(4) {
            animation: blur-text 1.5s 0.45s infinite linear alternate;
        }

        .loading-text span:nth-child(5) {
            animation: blur-text 1.5s 0.6s infinite linear alternate;
        }

        .loading-text span:nth-child(6) {
            animation: blur-text 1.5s 0.75s infinite linear alternate;
        }

        .loading-text span:nth-child(7) {
            animation: blur-text 1.5s 0.9s infinite linear alternate;
        }

        .loading-text span:nth-child(8) {
            animation: blur-text 1.5s 1.05s infinite linear alternate;
        }

        .loading-text span:nth-child(9) {
            animation: blur-text 1.5s 1.2s infinite linear alternate;
        }

        .loading-text span:nth-child(10) {
            animation: blur-text 1.5s 1.35s infinite linear alternate;
        }

        .loading-text span:nth-child(11) {
            animation: blur-text 1.5s 1.5s infinite linear alternate;
        }

        .loading-text span:nth-child(12) {
            animation: blur-text 1.5s 1.65s infinite linear alternate;
        }

        .loading-text span:nth-child(13) {
            animation: blur-text 1.5s 1.8s infinite linear alternate;
        }

        .loading-text span:nth-child(14) {
            animation: blur-text 1.5s 1.95s infinite linear alternate;
        }

        .loading-text span:nth-child(15) {
            animation: blur-text 1.5s 2.1s infinite linear alternate;
        }

        .loading-text span:nth-child(16) {
            animation: blur-text 1.5s 2.25s infinite linear alternate;
        }

        .loading-text span:nth-child(17) {
            animation: blur-text 1.5s 2.4s infinite linear alternate;
        }

        .loading-text span:nth-child(18) {
            animation: blur-text 1.5s 2.55s infinite linear alternate;
        }

        @keyframes blur-text {
            0% {
                filter: blur(0px);
            }

            100% {
                filter: blur(4px);
            }
        }

        /* Logos */
        .plyr__video-wrapper::before {
            content: '';
            position: absolute;
            top: 10px;
            right: 10px;
            width: 35px;
            height: 35px;
            background: url('<?= e($ROLEX['Rimg'] ?? '') ?>') no-repeat;
            background-size: cover;
            z-index: 10;
        }

        .plyr__video-wrapper::after {
            content: '';
            position: absolute;
            top: 100px;
            left: 15px;
            width: 300px;
            height: 150px;
            background: url('<?= e($ROLEX['Limg'] ?? '') ?>') no-repeat;
            background-size: contain;
            z-index: 10;
        }
    </style>
</head>
<body>
    <div id="loading" class="loading">
        <div class="loading-text">
            <span style="color:#FF9966"><?= e($ROLEX['span'][0] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][1] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][2] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][3] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][4] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][5] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][6] ?? '') ?></span>
            <span style="color:#FF9966"><?= e($ROLEX['span'][7] ?? '') ?></span>
            <span style="color:#FF0000"><?= e($ROLEX['span'][8] ?? '') ?></span>
            <span style="color:#FF0000"><?= e($ROLEX['span'][9] ?? '') ?></span>
            <span style="color:#FF0000"><?= e($ROLEX['span'][10] ?? '') ?></span>
            <span style="color:#FF0000"><?= e($ROLEX['span'][11] ?? '') ?></span>
            <span style="color:#FF0000"><?= e($ROLEX['span'][12] ?? '') ?></span>
            <span style="color:#66CC66"><?= e($ROLEX['span'][13] ?? '') ?></span>
            <span style="color:#66CC66"><?= e($ROLEX['span'][14] ?? '') ?></span>
            <span style="color:#66CC66"><?= e($ROLEX['span'][15] ?? '') ?></span>
        </div>
    </div>
    <video id="player" autoplay controls playsinline poster="<?= e(image($cid)) ?>">
        <source src="<?= e(live_id($id)) ?>" type="application/x-mpegURL">
    </video>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const video = document.getElementById("player");
            if (!video) return;

            const source = video.querySelector("source");
            if (!source) return;

            const src = source.src;
            let options = {};
            let speed = navigator.connection?.downlink || 5;
            let targetQuality = 720;
            if (speed < 1) targetQuality = 240;
            else if (speed < 2) targetQuality = 360;
            else if (speed < 5) targetQuality = 480;

            if (Hls.isSupported()) {

                const hls = new Hls({
                    maxBufferLength: 30,
                    maxMaxBufferLength: 60,
                    capLevelToPlayerSize: true
                });

                hls.loadSource(src);
                hls.attachMedia(video);

                hls.on(Hls.Events.MANIFEST_PARSED, () => {

                    const levels = hls.levels;
                    const qualities = levels.map(l => l.height);

                    let selectedIndex = 0;
                    levels.forEach((l, i) => {
                        if (l.height <= targetQuality) {
                            selectedIndex = i;
                        }
                    });

                    hls.currentLevel = selectedIndex;

                    options.quality = {
                        default: levels[selectedIndex].height,
                        options: qualities,
                        forced: true,
                        onChange: q => {
                            levels.forEach((l, i) => {
                                if (l.height === q) hls.currentLevel = i;
                            });
                        }
                    };

                    const player = new Plyr(video, options);

                    player.on('ready', () => {
                        video.style.opacity = 1;
                        document.getElementById('loading').style.display = 'none';
                    });
                });

                window.hls = hls;

            } else {
                const player = new Plyr(video, options);

                player.on('ready', () => {
                    video.style.opacity = 1;
                    document.getElementById('loading').style.display = 'none';
                });
            }
        });
    </script>

</body>

</html>