<?php
require_once 'jitendraunatti.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN <?= $SCARLET_WITCH['meta_data']['hname'] ?? 'JioTV' ?></title>
    <link rel="shortcut icon" href="<?= $SCARLET_WITCH['meta_data']['himg'] ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #020617;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: #f8fafc;
        }

        .bg-overlay {
            position: fixed;
            inset: 0;
            background: url('<?= $SCARLET_WITCH['meta_data']['bgpic'] ?>') no-repeat center center;
            background-size: cover;
            filter: brightness(0.3);
            z-index: -1;
        }

        .login-card {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 50px 100px -20px rgba(0, 0, 0, 0.9);
            width: 100%;
            max-width: 420px;
            border-radius: 2.5rem;
            padding: 3rem;
            position: relative;
            z-index: 10;
            animation: fadeIn 0.8s ease-out;
        }

        .input-field {
            background: rgba(2, 6, 23, 0.5);
            border: 1.5px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-field:focus {
            border-color: #6366f1;
            background: rgba(2, 6, 23, 0.8);
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.2);
            outline: none;
        }

        .otp-input::placeholder {
            font-size: 0.9rem;
            letter-spacing: 0;
            font-weight: 500;
            color: #475569;
            text-align: center;
        }

        .otp-input {
            font-size: 1.6rem;
            letter-spacing: 0.6rem;
            font-weight: 800;
            text-align: center;
        }

        .btn-action {
            background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%);
            transition: all 0.3s;
        }

        .btn-action:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(79, 70, 229, 0.4);
            filter: brightness(1.1);
        }

        .btn-action:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="p-4">

    <div class="bg-overlay"></div>

    <div class="login-card">
        <div class="text-center mb-10">
            <img src="<?= $SCARLET_WITCH['meta_data']['himg'] ?>" alt="Logo" class="w-20 h-20 drop-shadow-2xl mx-auto mb-4">
            <h1 class="text-2xl font-extrabold text-white tracking-tight uppercase"><?= "LOGIN " . $SCARLET_WITCH['meta_data']['hname'] ?? 'JioTV' ?></h1>
            <p class="text-slate-400 text-xs mt-2 uppercase tracking-[0.2em] font-semibold">Secure Access Protocol</p>
        </div>

        <div id="auth-box" class="space-y-6">
            <div id="dynamic-zone" class="space-y-4">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-2">Registered Mobile</label>
                    <div class="relative">
                        <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 font-bold border-r border-slate-800 pr-4">+91</span>
                        <input type="tel" id="mobile" maxlength="10" placeholder="000 000 0000"
                            class="input-field w-full rounded-2xl py-4 pl-16 pr-5 text-xl tracking-widest font-bold text-white">
                    </div>
                </div>
            </div>

            <button onclick="handleProtocol()" id="actionBtn" class="btn-action w-full text-white font-bold py-4 rounded-2xl shadow-xl shadow-indigo-500/20 uppercase tracking-widest text-xs">
                SEND OTP
            </button>

            <div id="resend-container" class="text-center hidden">
                <button id="resendBtn" onclick="handleProtocol(true)" disabled class="text-[10px] font-bold text-slate-500 uppercase tracking-widest transition-all">
                    Resend OTP in <span id="timer">60</span>s
                </button>
            </div>
        </div>

        <div id="status-msg" class="mt-6 text-center text-sm font-medium h-5"></div>

        <div class="mt-4 flex flex-col items-center gap-2 text-center">
            <p class="text-[10px] text-slate-500 tracking-[0.15em] uppercase font-bold">
                <i class="fa-solid fa-mobile-screen-button text-indigo-400 mr-1"></i>
                Before sending OTP, you must have a valid <span class="text-indigo-400">Jio Number</span>
            </p>

            <p class="text-[10px] text-slate-500 tracking-[0.15em] uppercase font-bold">
                <i class="fa-solid fa-server text-rose-500 mr-1"></i>
                Ensure your hosting is <span class="text-rose-500">not blacklisted</span> by JioTV
            </p>

            <p class="text-[10px] text-slate-500 tracking-[0.2em] uppercase font-bold mt-2">
                Made with <i class="fa-solid fa-heart text-rose-500 animate-pulse mx-1"></i> by
                <span class="text-indigo-400"><?= $SCARLET_WITCH['JITENDRA_UNIVERSE']['DEV_NAME'] ?></span>
            </p>
        </div>
    </div>

    <script>
        const UNIVERSE = <?= json_encode($SCARLET_WITCH['JITENDRA_UNIVERSE']); ?>;
        let step = "MOBILE";
        let countdown;

        async function handleProtocol(isResend = false) {
            const btn = document.getElementById('actionBtn');
            const msg = document.getElementById('status-msg');
            const mobileNum = document.getElementById('mobile')?.value || localStorage.getItem('last_num');

            const HEADERS = {
                "Content-Type": "application/json",
                "x-developed-by": UNIVERSE['x-developed-by'],
                "X-POWERED-BY": UNIVERSE['X-POWERED-BY'],
                "X-GITHUB-USERNAME": UNIVERSE['X-GITHUB-USERNAME'],
                "X-TIMESTAMP": Date.now().toString()
            };

            if (step === "MOBILE" || isResend) {
                if (!mobileNum || mobileNum.length !== 10) {
                    msg.className = "mt-6 text-center text-sm font-medium text-rose-500";
                    msg.innerText = "Enter a valid 10-digit number ❌";
                    return;
                }

                localStorage.setItem('last_num', mobileNum);
                btn.disabled = true;
                btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin mr-2"></i> ${isResend ? 'RESENDING...' : 'SENDING...'}`;

                try {
                    const res = await fetch("jitendraunatti.php", {
                        method: "POST",
                        headers: HEADERS,
                        body: JSON.stringify({
                            action: "otpsend",
                            number: mobileNum
                        })
                    });
                    const data = await res.json();

                    if (data.message === "SUCCESS") {
                        step = "OTP";
                        msg.className = "mt-6 text-center text-sm font-medium text-emerald-400";
                        msg.innerText = data.ui_label;
                        if (!isResend) transitionToOtp();
                        startResendTimer();
                    } else {
                        msg.className = "mt-6 text-center text-sm font-medium text-rose-500";
                        msg.innerText = data.ui_label;
                        btn.disabled = false;
                        btn.innerText = "SEND OTP";
                    }
                } catch (e) {
                    btn.disabled = false;
                }
            } else {
                const otp = document.getElementById('otp').value;
                if (otp.length < 6) return;

                btn.disabled = true;
                btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin mr-2"></i> VERIFYING...';

                try {
                    const res = await fetch("jitendraunatti.php", {
                        method: "POST",
                        headers: HEADERS,
                        body: JSON.stringify({
                            action: "otpverify",
                            otp: otp
                        })
                    });
                    const data = await res.json();

                    if (data.message === "SUCCESS") {
                        msg.className = "mt-6 text-center text-sm font-medium text-emerald-400";
                        msg.innerText = "SUCCESSFULLY LOGGED IN ✅";
                        setTimeout(() => {
                            window.location.href = "index.php";
                        }, 1000);
                    } else {
                        msg.className = "mt-6 text-center text-sm font-medium text-rose-500";
                        msg.innerText = data.ui_label;
                        btn.disabled = false;
                        btn.innerText = "VERIFY & LOGIN";
                    }
                } catch (e) {
                    btn.disabled = false;
                }
            }
        }

        function transitionToOtp() {
            const zone = document.getElementById('dynamic-zone');
            const btn = document.getElementById('actionBtn');
            const resendCont = document.getElementById('resend-container');

            zone.style.opacity = '0';
            setTimeout(() => {
                zone.innerHTML = `
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-2">Verification Code</label>
                        <input type="tel" id="otp" maxlength="6" placeholder="Enter OTP Code"
                            class="input-field otp-input w-full rounded-2xl py-4 px-6 text-white font-bold">
                    </div>
                `;
                zone.style.opacity = '1';
                resendCont.classList.remove('hidden');
                btn.disabled = false;
                btn.innerText = "VERIFY & LOGIN";
            }, 300);
        }

        function startResendTimer() {
            let timeLeft = 60;
            const timerSpan = document.getElementById('timer');
            const resendBtn = document.getElementById('resendBtn');

            resendBtn.disabled = true;
            resendBtn.className = "text-[10px] font-bold text-slate-600 uppercase tracking-widest cursor-not-allowed";

            clearInterval(countdown);
            countdown = setInterval(() => {
                timeLeft--;
                timerSpan.innerText = timeLeft;
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    resendBtn.disabled = false;
                    resendBtn.className = "text-[10px] font-bold text-indigo-400 hover:text-indigo-300 uppercase tracking-widest cursor-pointer active:scale-95";
                    resendBtn.innerHTML = "Didn't get OTP? <span class='underline'>Resend Now</span>";
                }
            }, 1000);
        }
    </script>
</body>

</html>