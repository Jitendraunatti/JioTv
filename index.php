<?php

include "jitendraunatti.php";
$ASUR = jitendraunatti();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "JIOTV+  " . $ASUR['hname']; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: black;
        }
        .channels {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }
        .channel {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .channel:hover {
            transform: translateY(-5px);
        }
        .channel img {
            width: 130px;
            height: auto;
            margin-bottom: 20px;
        }
        .channel-info {
            text-align: center;
        }
        .channel-info h2 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }
        .channel-info p {
            margin: 5px 0;
            color: #666;
        }
        .channel-info a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .channel-info a:hover {
            background-color: #0056b3;
        }
        .filter {
            margin-bottom: 20px;
        }
        .filter select {
            padding: 8px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        #jtvh1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        #jtvh1 img {
            max-width: 200px;
            height: 100px;
        }
        #userButtons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        #userButtons button {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #userButtons button:hover {
            background-color: #0056b3;
        }
        #searchWrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        #searchBar {
            padding: 8px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }
    </style>
</head>
<body>

<center>
<header>
        <div id="jtvh1">
            <img src="https://ik.imagekit.io/techiesneh/tv_logo/jtv-plus_TMaGGk6N0.png" alt="JIOTV+">
        </div>
        <div id="userButtons">
    <button id="loginButton" onclick="window.location.href='login.php'">Login</button>
    <button id="PlayListButton" onclick="window.location.href='playlist.php'">PlayList</button>
    <button id="PlayListButton" onclick="window.location.href='star.php'">Star Tv</button>
</div>
<h1 style="color: white;"><?php echo $ASUR['message1']; ?></h1>
<h1 style="color: white;"><?php echo $ASUR['message2']; ?></h1>
<h1 style="color: white;"><?php echo $ASUR['message3']; ?></h1>
<h1 style="color: white;"><?php echo $ASUR['message4']; ?></h1>
<h1 style="color: white;"><?php echo $ASUR['message5']; ?></h1>
    </header></br>
    <div id="searchWrapper">
        <input type="text" name="searchBar" id="searchBar" placeholder="Search ..." />
    </div>
<div class="filter">
    <label for="language">Language:</label>
    <select id="language">
    <option value="">All</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Odia">Odia</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Bhojpuri">Bhojpuri</option>
                    <option value="Kannada">Kannada</option>
                    <option value="Assamese">Assamese</option>
                    <option value="Nepali">Nepali</option>
                    <option value="French">French</option>
    </select>

    <label for="type">Type:</label>
    <select id="type">
    <option value="">All</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Movies">Movies</option>
                    <option value="Kids">Kids</option>
                    <option value="Sports">Sports</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Infotainment">Infotainment</option>
                    <option value="News">News</option>
                    <option value="Music">Music</option>
                    <option value="Devotional">Devotional</option>
                    <option value="Business">Business</option>
                    <option value="Educational">Educational</option>
                    <option value="Shopping">Shopping</option>
                    <option value="JioDarshan">JioDarshan</option>
    </select>
</div>
    </center>
<div class="channels">
    <?php
    if($ASUR['latest_script'] === jitendra_kumar()){
    $fileContent = file_get_contents($ASUR['play'][0]);
    $lines = explode("\n", $fileContent);

    foreach ($lines as $line) {
        if (strpos($line, "#EXTINF") === 0) {
            if (preg_match('/tvg-id="([^"]+)".*tvg-name="([^"]+)".*tvg-type="([^"]+)".*group-title="([^"]+)".*tvg-language="([^"]+)".*tvg-logo="([^"]+)"/', $line, $matches)) {
                $tvgId = $matches[1];
                $name = $matches[2];
                $type = $matches[3];
                $groupTitle = $matches[4];
                $language = $matches[5];
                $logo = $matches[6];
                $streamUrl = trim(end($lines));
        
        
                $logo1 = str_replace("https://jiotvimages.cdn.jio.com/dare_images/images/","",$logo);
                $logo1 = str_replace(".png","",$logo1);
            echo '<div class="channel" data-language="' . $language . '" data-type="' . $type . '">';
            echo '<img src="' . $logo . '" alt="' . $name . ' Logo">';
            echo '<div class="channel-info">';
            echo '<h2>' . $name . '</h2>';
            echo '<p>Language: ' . $language . '</p>';
            echo '<p>Type: ' . $type . '</p>';
            echo '<a href="playy.php?id=' . $tvgId . "&cid=".$logo1.'" target="">Watch Now</a>';
            echo '</div>';
            echo '</div>';
            }
        }
    }
}
else
{
    echo '
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9;">
        <div style="text-align: center; background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h1 style="color: #333; font-family: Arial, sans-serif; margin-bottom: 20px;">🆕 UPDATE IS AVAILABLE NOW</h1>
            <p style="font-size: 18px; color: #555; margin-bottom: 30px;">A new version of the script is now available. Click the button below to download the latest version.</p>
            <a href="https://github.com/Jitendraunatti?tab=repositories" style="display: inline-block; background-color: #28a745; color: #ffffff; padding: 10px 20px; font-size: 18px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">
                Download Now
            </a>
        </div>
    </div>
    ';
}
    ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const languageSelect = document.getElementById("language");
        const typeSelect = document.getElementById("type");
        const searchBar = document.getElementById("searchBar");
        const channels = document.querySelectorAll(".channel");

        languageSelect.addEventListener("change", filterChannels);
        typeSelect.addEventListener("change", filterChannels);
        searchBar.addEventListener("input", filterChannels);

        function filterChannels() {
            const selectedLanguage = languageSelect.value;
            const selectedType = typeSelect.value;
            const searchTerm = searchBar.value.toLowerCase();

            channels.forEach(function(channel) {
                const channelLanguage = channel.getAttribute("data-language");
                const channelType = channel.getAttribute("data-type");
                const channelName = channel.querySelector(".channel-info h2").textContent.toLowerCase();

                if ((selectedLanguage === "" || channelLanguage === selectedLanguage) &&
                    (selectedType === "" || channelType === selectedType) &&
                    (searchTerm === "" || channelName.includes(searchTerm))) {
                    channel.style.display = "block";
                } else {
                    channel.style.display = "none";
                }
            });
        }
    });
</script>

</body>
</html>
