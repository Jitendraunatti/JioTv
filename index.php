<?php
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
    <title>JIOTV <?= $SCARLET_WITCH['meta_data']['hname'] ?? 'JioTV' ?></title>
    <link rel="shortcut icon" href="<?= $SCARLET_WITCH['meta_data']['himg'] ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #030305;
            --surface: #0a0a0c;
            --accent: #3b82f6;
            --accent-glow: rgba(59, 130, 246, 0.5);
            --border: rgba(255, 255, 255, 0.08);
            --glass: rgba(255, 255, 255, 0.03);
            --hd-gradient: linear-gradient(45deg, #f59e0b, #ef4444);
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

        /* --- ENTRANCE ANIMATION STYLE --- */
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

        .card {
            background: var(--glass);
            height: 230px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            border-radius: 32px;
            padding: 20px;
            transition: 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            /* Start hidden for animation */
            opacity: 0;
            animation: revealCard 0.5s ease forwards;
        }

        /* --- SIDEBAR (PC) --- */
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

        .playlist-pc {
            background: rgba(59, 130, 246, 0.1);
            color: var(--accent);
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .login-pc {
            background: #fff;
            color: #000;
            margin-bottom: 30px;
        }

        /* --- MAIN --- */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: radial-gradient(circle at 50% -20%, #1e1b4b, #030305 80%);
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
            transition: 0.3s;
        }

        #channelGrid {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 25px;
        }

        .card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--accent);
        }

        .hd-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--hd-gradient);
            padding: 4px 10px;
            border-radius: 8px;
            font-size: 10px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .img-box {
            width: 100%;
            height: 110px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .img-box img {
            width: 60%;
            height: 60%;
            object-fit: contain;
        }

        .ch-title {
            font-size: 14px;
            font-weight: 700;
            color: #e2e8f0;
            text-align: center;
        }

        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(10, 10, 12, 0.95);
            backdrop-filter: blur(30px);
            border-top: 1px solid var(--border);
            padding: 12px 0;
            z-index: 1000;
            justify-content: space-around;
            padding-bottom: calc(12px + env(safe-area-inset-bottom));
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #64748b;
            font-size: 10px;
            font-weight: 700;
            gap: 6px;
            flex: 1;
        }

        .nav-item.active {
            color: var(--accent);
        }

        .nav-item svg {
            width: 22px;
            height: 22px;
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
                gap: 15px;
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
            border-radius: 40px 40px 0 0;
            z-index: 2005;
            transition: 0.6s cubic-bezier(0.2, 1, 0.2, 1);
            padding: 35px;
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
        <div style="padding: 45px 30px; text-align:center;">
            <img src="https://jiotvimages.cdn.jio.com/dare_images/images/jiotv_logo.png" style="height: 52px; filter: drop-shadow(0 0 10px rgba(59,130,246,0.3));">
        </div>
        <div class="nav-container">
            <!-- --- SWITCH SOURCE --- -->
            <div class="group-label">Switch Source</div>
            <a href="zee5.php" class="pc-btn" style="background: rgba(225, 29, 72, 0.1); color: #e11d48; border: 1px solid rgba(225, 29, 72, 0.2); transition: 0.3s;" onmouseover="this.style.background='#e11d48'; this.style.color='#fff';" onmouseout="this.style.background='rgba(225, 29, 72, 0.1)'; this.style.color='#e11d48';">
                <img src="https://www.zee5.com/images/favicon.ico" style="height: 20px;">
                Switch to Zee5
            </a>

            <div class="group-label">Library</div>
            <a href="playlist.php" class="pc-btn playlist-pc">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg>
                My Playlist
            </a>

            <div class="group-label">Category</div>
            <div id="pcCatList"></div>

            <div class="group-label">Language</div>
            <div id="pcLangList"></div>
        </div>
        <a href="login.php" class="pc-btn login-pc">Account Login</a>
    </aside>

    <main>
        <header><input id="searchBox" class="search-box" type="text" placeholder="Search Channels..."></header>
        <div id="dynamic-messages" style="margin-top: 15px; text-align: center;">
            <?php
            if (isset($SCARLET_WITCH['message']) && is_array($SCARLET_WITCH['message'])) {
                foreach ($SCARLET_WITCH['message'] as $msg) {
                    // Check if message is not empty to avoid rendering empty tags
                    if (!empty($msg['message'])) {
                        $color = $msg['color'] ?? '#fff';
                        $op = $msg['tag_op'] ?? '<div>';
                        $cl = $msg['tag_c'] ?? '</div>';

                        echo $op . "<span style='color: $color;'>" . htmlspecialchars($msg['message']) . "</span>" . $cl;
                    }
                }
            }
            ?>
        </div>
        <div id="channelGrid"></div>

        <div class="bottom-nav">
            <div class="nav-item active" onclick="location.reload()"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>Home</div>
            <div class="nav-item" onclick="openModal('cat')"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h7"></path>
                </svg>Cat</div>
            <div class="nav-item" onclick="openModal('lang')"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5c1.382 3.307 3.416 6.512 5.968 9.25M7 13a12 12 0 01-4-5.5"></path>
                </svg>Lang</div>
            <div class="nav-item" onclick="window.location.href='playlist.php'"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>Playlist</div>
            <div class="nav-item" onclick="window.location.href='login.php'"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>Login</div>
            <div class="nav-item" onclick="window.location.href='zee5.php'" style="color: #e11d48;">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
                Zee5
            </div>
        </div>

        <div id="filterModal">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
                <h2 id="modalTitle" style="font-weight:800; font-size:22px;">Filters</h2>
                <div onclick="closeModal()" style="cursor:pointer; font-size:24px;">&times;</div>
            </div>
            <div id="modalContent" style="display:grid; grid-template-columns: 1fr 1fr; gap: 12px;"></div>
        </div>
    </main>

    <script>
        const rawCategories = <?php echo json_encode($SCARLET_WITCH['channelCategoryMapping'] ?? []); ?>;
        const rawLanguages = <?php echo json_encode($SCARLET_WITCH['languageIdMapping'] ?? []); ?>;
        let channels = [],
            activeCat = "0",
            activeLang = "0";

        function setupUI() {
            const pcCat = document.getElementById("pcCatList");
            const pcLang = document.getElementById("pcLangList");
            pcCat.innerHTML = pcLang.innerHTML = "";
            const createLink = (id, name, type) => {
                const div = document.createElement("div");
                div.className = `nav-link ${((type==='cat' && activeCat == id) || (type==='lang' && activeLang == id)) ? 'active' : ''}`;
                div.innerText = name;
                div.onclick = () => {
                    type === 'cat' ? activeCat = id : activeLang = id;
                    setupUI();
                    applyFilters();
                };
                return div;
            };
            pcCat.appendChild(createLink("0", "All Categories", "cat"));
            Object.entries(rawCategories).forEach(([id, name]) => pcCat.appendChild(createLink(id, name, 'cat')));
            pcLang.appendChild(createLink("0", "All Languages", "lang"));
            Object.entries(rawLanguages).forEach(([id, name]) => pcLang.appendChild(createLink(id, name, 'lang')));
        }

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
                        action: "livechannels"
                    })
                });
                const data = await res.json();
                channels = data.result || [];
                applyFilters();
                setupUI();
            } catch (e) {
                console.error(e);
            }
        }

        function applyFilters() {
            const query = document.getElementById("searchBox").value.toLowerCase();
            const grid = document.getElementById("channelGrid");
            grid.innerHTML = "";

            const filtered = channels.filter(ch => {
                const matchesQuery = ch.channel_name.toLowerCase().includes(query);
                const matchesCat = activeCat == "0" || ch.channelCategoryId == activeCat;
                const matchesLang = activeLang == "0" || ch.channelLanguageId == activeLang;
                return matchesQuery && matchesCat && matchesLang;
            });

            // Sequential Staggered Animation Logic
            filtered.forEach((ch, index) => {
                const isHD = ch.channel_name.toLowerCase().includes("hd");
                const card = document.createElement('div');
                card.className = "card";

                // Set staggered delay: each card waits 30ms more than the previous one
                card.style.animationDelay = `${index * 35}ms`;

                card.onclick = () => {
                    window.location.href = `play.php?id=${ch.channel_id}&cid=${ch.logoUrl}`;
                };
                card.innerHTML = `
                    ${isHD ? '<div class="hd-badge">HD</div>' : ''}
                    <div class="img-box"><img loading="lazy" src="https://jiotvimages.cdn.jio.com/dare_images/images/${ch.logoUrl}"></div>
                    <div class="ch-title">${ch.channel_name}</div>`;
                grid.appendChild(card);
            });
        }

        function openModal(type) {
            const modal = document.getElementById("filterModal");
            const content = document.getElementById("modalContent");
            document.getElementById("overlay").style.display = "block";
            modal.style.bottom = "0";
            document.getElementById("modalTitle").innerText = type === 'cat' ? "Categories" : "Languages";
            content.innerHTML = "";
            const data = type === 'cat' ? rawCategories : rawLanguages;
            Object.entries({
                "0": "All",
                ...data
            }).forEach(([id, name]) => {
                const btn = document.createElement("div");
                btn.style = "padding:18px; background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.05); border-radius:20px; font-size:14px; font-weight:600; text-align:center; cursor:pointer;";
                btn.innerText = name;
                btn.onclick = () => {
                    type === 'cat' ? activeCat = id : activeLang = id;
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