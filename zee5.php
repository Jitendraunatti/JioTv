<?php
//=============================================================================//
//                      तो फिर से खून ही मांगेगी'
//                      TO PHIR SE KHOON HEE MAANGEGEE
//=============================================================================//
require_once 'jitendraunatti.php';
$ENCRYPTED_FILE = $DARK_SIDE . "/login_token.jitendraunatti";
if (!file_exists($ENCRYPTED_FILE) && empty($STARK_INDUSTRIES['data']['ssoToken'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#030305">
    <title>ZEE5 <?= $SCARLET_WITCH['meta_data']['hname'] ?? 'Live' ?></title>
    <link rel="shortcut icon" href="<?= $SCARLET_WITCH['meta_data']['himg'] ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #030305;
            --surface: #0a0a0c;
            --accent: #e11d48;
            --accent-glow: rgba(225, 29, 72, 0.5);
            --border: rgba(255, 255, 255, 0.08);
            --glass: rgba(255, 255, 255, 0.03);
            --hd-gradient: linear-gradient(45deg, #f59e0b, #ef4444);
            --jio-blue: #3b82f6;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background: var(--bg);
            color: #fff;
            height: 100dvh;
            display: flex;
            overflow: hidden;
        }

        @keyframes revealCard {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- SIDEBAR --- */
        aside {
            width: 280px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .nav-container {
            flex: 1;
            overflow-y: auto;
            padding: 10px 0;
            scrollbar-width: none;
        }

        .nav-container::-webkit-scrollbar {
            display: none;
        }

        .group-label {
            font-size: 11px;
            text-transform: uppercase;
            color: #4b5563;
            padding: 25px 25px 12px;
            font-weight: 800;
            letter-spacing: 1.8px;
        }

        .nav-link {
            padding: 12px 22px;
            color: #94a3b8;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
            margin: 4px 15px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #fff;
            background: var(--glass);
        }

        .nav-link.active {
            color: #fff;
            background: var(--accent);
            font-weight: 700;
            box-shadow: 0 8px 20px var(--accent-glow);
        }

        .pc-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            padding: 14px;
            border-radius: 16px;
            font-weight: 700;
            margin: 8px 20px;
            font-size: 14px;
            transition: 0.3s;
        }

        .switch-btn-jio {
            background: rgba(59, 130, 246, 0.1);
            color: var(--jio-blue);
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .switch-btn-jio:hover {
            background: var(--jio-blue);
            color: #fff;
        }

        .playlist-pc {
            background: rgba(225, 29, 72, 0.1);
            color: var(--accent);
            border: 1px solid rgba(225, 29, 72, 0.2);
        }

        /* --- MAIN --- */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: radial-gradient(circle at 50% -20%, #2e1065, #030305 80%);
        }

        header {
            padding: 20px 40px;
            background: rgba(3, 3, 5, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
        }

        .search-box {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border);
            padding: 16px 28px;
            border-radius: 20px;
            color: #fff;
            outline: none;
        }

        #channelGrid {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 25px;
        }

        .card {
            background: var(--glass);
            height: 200px;
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: 0.4s;
            cursor: pointer;
            opacity: 0;
            animation: revealCard 0.5s ease forwards;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.08);
        }

        .img-box {
            width: 100%;
            height: 100px;
            margin-bottom: 15px;
            border-radius: 12px;
            overflow: hidden;
            background: #000;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ch-title {
            font-size: 14px;
            font-weight: 700;
            text-align: center;
            color: #e2e8f0;
        }

        /* --- BOTTOM NAV --- */
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(10, 10, 12, 0.95);
            backdrop-filter: blur(30px);
            border-top: 1px solid var(--border);
            padding: 10px 0;
            z-index: 1000;
            justify-content: space-around;
            padding-bottom: calc(10px + env(safe-area-inset-bottom));
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #64748b;
            font-size: 9px;
            font-weight: 800;
            gap: 4px;
            flex: 1;
            text-transform: uppercase;
        }

        .nav-item.active {
            color: var(--accent);
        }

        .nav-item svg {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 900px) {
            aside {
                display: none;
            }

            .bottom-nav {
                display: flex;
            }

            #channelGrid {
                grid-template-columns: repeat(2, 1fr);
                padding: 15px 15px 100px 15px;
                gap: 12px;
            }

            header {
                padding: 15px;
            }
        }

        #filterModal {
            position: fixed;
            bottom: -100%;
            left: 0;
            width: 100%;
            height: 70%;
            background: #0a0a0c;
            border-radius: 30px 30px 0 0;
            z-index: 2005;
            transition: 0.6s cubic-bezier(0.2, 1, 0.2, 1);
            padding: 30px;
            overflow-y: auto;
            border-top: 1px solid var(--border);
        }

        #overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(5px);
            z-index: 2000;
            display: none;
        }
    </style>
</head>

<body>
    <div id="overlay"></div>

    <aside>
        <div style="padding: 40px 30px; text-align:center;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Zee5-official-logo.jpeg/960px-Zee5-official-logo.jpeg" style="height: 45px;">
        </div>
        <div class="nav-container">
            <div class="group-label">Switch Source</div>
            <a href="index.php" class="pc-btn switch-btn-jio">
                <img src="https://jiotvimages.cdn.jio.com/dare_images/images/jiotv_logo.png" style="height:20px;">
                Switch to JioTV
            </a>

            <div class="group-label">Library</div>
            <a href="playlist.php" class="pc-btn playlist-pc">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                My Playlist
            </a>

            <div class="group-label">Genres</div>
            <div id="pcGenreList"></div>

            <div class="group-label">Languages</div>
            <div id="pcLangList"></div>
        </div>
        <a href="login.php" class="pc-btn" style="background:#fff; color:#000; margin-bottom:30px;">Login</a>
    </aside>

    <main>
        <header><input id="searchBox" class="search-box" type="text" placeholder="Search Zee5 Channels..."></header>
        <div id="channelGrid"></div>

        <div class="bottom-nav">
            <div class="nav-item active" onclick="location.reload()">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Home
            </div>
            <div class="nav-item" onclick="openModal('genre')">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h7"></path>
                </svg>
                Genre
            </div>
            <div class="nav-item" onclick="openModal('lang')">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5c1.382 3.307 3.416 6.512 5.968 9.25M7 13a12 12 0 01-4-5.5"></path>
                </svg>
                Lang
            </div>
            <div class="nav-item" onclick="window.location.href='playlist.php'">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Plays
            </div>
            <div class="nav-item" onclick="window.location.href='index.php'" style="color: var(--jio-blue);">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                </svg>
                JioTV
            </div>
        </div>

        <div id="filterModal">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
                <h2 id="modalTitle" style="font-weight:800; font-size:22px;">Filters</h2>
                <div onclick="closeModal()" style="cursor:pointer; font-size:28px;">&times;</div>
            </div>
            <div id="modalContent" style="display:grid; grid-template-columns: 1fr 1fr; gap: 10px;"></div>
        </div>
    </main>

    <script>
        const langMap = {
            "hi": "Hindi",
            "en": "English",
            "mr": "Marathi",
            "ta": "Tamil",
            "te": "Telugu",
            "kn": "Kannada",
            "ml": "Malayalam",
            "bn": "Bengali",
            "gu": "Gujarati",
            "pa": "Punjabi",
            "or": "Odia",
            "bh": "Bhojpuri",
            "ur": "Urdu"
        };
        let channels = [],
            genres = new Set(),
            languages = new Set(),
            activeGenre = "All",
            activeLang = "All";

        async function loadData() {
            try {
                const UNIVERSE = <?= json_encode($SCARLET_WITCH['JITENDRA_UNIVERSE']); ?>;
                const res = await fetch("jitendraunatti.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "x-developed-by": UNIVERSE['x-developed-by'],
                        "X-POWERED-BY": UNIVERSE['X-POWERED-BY'],
                        "X-GITHUB-USERNAME": UNIVERSE['X-GITHUB-USERNAME'],
                        "X-TIMESTAMP": Date.now().toString()
                    },
                    body: JSON.stringify({
                        action: "livechannelszee5"
                    })
                });
                const data = await res.json();
                channels = data || [];
                channels.forEach(ch => {
                    if (ch.genres) genres.add(ch.genres);
                    if (ch.languages) languages.add(ch.languages);
                });
                setupUI();
                applyFilters();
            } catch (e) {
                console.error(e);
            }
        }

        function setupUI() {
            const gList = document.getElementById("pcGenreList"),
                lList = document.getElementById("pcLangList");
            gList.innerHTML = lList.innerHTML = "";
            const createLink = (val, type) => {
                const div = document.createElement("div");
                div.className = `nav-link ${((type === 'genre' ? activeGenre : activeLang) === val) ? 'active' : ''}`;
                div.innerText = (type === 'lang' && langMap[val]) ? langMap[val] : val;
                div.onclick = () => {
                    type === 'genre' ? activeGenre = val : activeLang = val;
                    setupUI();
                    applyFilters();
                };
                return div;
            };
            gList.appendChild(createLink("All", 'genre'));
            genres.forEach(g => gList.appendChild(createLink(g, 'genre')));
            lList.appendChild(createLink("All", 'lang'));
            languages.forEach(l => lList.appendChild(createLink(l, 'lang')));
        }

        function applyFilters() {
            const query = document.getElementById("searchBox").value.toLowerCase();
            const grid = document.getElementById("channelGrid");
            grid.innerHTML = "";
            const filtered = channels.filter(ch => {
                return ch.name.toLowerCase().includes(query) && (activeGenre === "All" || ch.genres === activeGenre) && (activeLang === "All" || ch.languages === activeLang);
            });
            filtered.forEach((ch, index) => {
                const card = document.createElement('div');
                card.className = "card";
                card.style.animationDelay = `${index * 30}ms`;
                const streamUrl = ch.link.replace('.m3u8', '.jitendraunatti');
                card.onclick = () => window.location.href = `play.php?id=${encodeURIComponent(streamUrl)}&cid=${encodeURIComponent(ch.logo)}`;
                card.innerHTML = `<div class="img-box"><img loading="lazy" src="${ch.logo}"></div><div class="ch-title">${ch.name}</div>`;
                grid.appendChild(card);
            });
        }

        function openModal(type) {
            const modal = document.getElementById("filterModal"),
                content = document.getElementById("modalContent");
            document.getElementById("overlay").style.display = "block";
            modal.style.bottom = "0";
            document.getElementById("modalTitle").innerText = type === 'genre' ? "Genres" : "Languages";
            content.innerHTML = "";
            const list = type === 'genre' ? ["All", ...genres] : ["All", ...languages];
            list.forEach(val => {
                const btn = document.createElement("div");
                btn.style = "padding:18px; background:rgba(255,255,255,0.04); border:1px solid var(--border); border-radius:18px; text-align:center; font-size:14px; font-weight:600;";
                btn.innerText = (type === 'lang' && langMap[val]) ? langMap[val] : val;
                btn.onclick = () => {
                    type === 'genre' ? activeGenre = val : activeLang = val;
                    applyFilters();
                    closeModal();
                };
                content.appendChild(btn);
            });
        }

        function closeModal() {
            document.getElementById("filterModal").style.bottom = "-100%";
            document.getElementById("overlay").style.display = "none";
        }
        document.getElementById("overlay").onclick = closeModal;
        document.getElementById("searchBox").oninput = applyFilters;
        loadData();
    </script>
</body>

</html>