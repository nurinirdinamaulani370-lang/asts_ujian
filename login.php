<?php
session_start();

// Kalau sudah login, langsung ke dashboard
if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

// Username dan password login
$usernameBenar = "admin";
$passwordBenar = "admin123";

// Proses login
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username'] ?? "");
    $password = $_POST['password'] ?? "";

    if ($username === $usernameBenar && $password === $passwordBenar) {

        $_SESSION['admin_login'] = true;
        $_SESSION['admin_username'] = $username;

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - ASTS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background:
                radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.15), transparent 30%),
                radial-gradient(circle at 80% 80%, rgba(255, 215, 100, 0.10), transparent 30%),
                #050505;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Background animation */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: float 8s ease-in-out infinite;
            pointer-events: none;
        }

        .orb.one {
            width: 250px;
            height: 250px;
            background: rgba(212, 175, 55, 0.15);
            top: -80px;
            left: -80px;
        }

        .orb.two {
            width: 300px;
            height: 300px;
            background: rgba(255, 193, 7, 0.08);
            bottom: -120px;
            right: -100px;
            animation-delay: 2s;
        }

        .orb.three {
            width: 180px;
            height: 180px;
            background: rgba(255, 215, 100, 0.08);
            top: 40%;
            right: 15%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(30px, -25px);
            }
        }

        /* Sparkles */
        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #d4af37;
            border-radius: 50%;
            box-shadow: 0 0 15px #d4af37;
            animation: sparkle 3s infinite ease-in-out;
        }

        .s1 {
            top: 15%;
            left: 20%;
        }

        .s2 {
            top: 25%;
            right: 18%;
            animation-delay: 1s;
        }

        .s3 {
            bottom: 20%;
            left: 15%;
            animation-delay: 2s;
        }

        .s4 {
            bottom: 15%;
            right: 25%;
            animation-delay: 1.5s;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0.2;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(2);
            }
        }

        /* Login Card */
        .login-container {
            width: 100%;
            max-width: 450px;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        .login-card {
            background: rgba(15, 15, 15, 0.88);
            border: 1px solid rgba(212, 175, 55, 0.35);
            border-radius: 28px;
            padding: 42px;
            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.7),
                0 0 40px rgba(212, 175, 55, 0.08);
            backdrop-filter: blur(20px);
            animation: cardIn 0.8s ease;
        }

        @keyframes cardIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Logo */
        .logo {
            width: 82px;
            height: 82px;
            margin: 0 auto 22px;
            border-radius: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 38px;
            font-weight: 900;
            color: #080808;

            background: linear-gradient(
                135deg,
                #f8e7a1,
                #d4af37,
                #a67c00
            );

            box-shadow:
                0 0 30px rgba(212, 175, 55, 0.25);

            animation: logoFloat 3s ease-in-out infinite;
        }

        @keyframes logoFloat {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .title {
            text-align: center;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 8px;

            background: linear-gradient(
                90deg,
                #fff,
                #d4af37,
                #fff
            );

            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            animation: shine 4s linear infinite;
        }

        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        .subtitle {
            text-align: center;
            color: #888;
            font-size: 14px;
            margin-bottom: 32px;
        }

        /* Error */
        .error {
            background: rgba(220, 38, 38, 0.12);
            border: 1px solid rgba(239, 68, 68, 0.35);
            color: #ff8a8a;
            padding: 13px 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
        }

        /* Form */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            color: #d8d8d8;
            font-size: 14px;
            font-weight: 600;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #d4af37;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 15px 16px 15px 48px;

            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.10);

            border-radius: 14px;
            color: white;
            font-size: 15px;
            outline: none;

            transition: 0.3s;
        }

        input:focus {
            border-color: #d4af37;
            background: rgba(212, 175, 55, 0.05);
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.08);
        }

        input::placeholder {
            color: #666;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);

            border: none;
            background: none;
            color: #888;
            cursor: pointer;
            font-size: 18px;
        }

        .password-toggle:hover {
            color: #d4af37;
        }

        /* Button */
        .login-btn {
            width: 100%;
            border: none;
            padding: 16px;

            border-radius: 14px;

            background: linear-gradient(
                135deg,
                #f5d76e,
                #d4af37,
                #a67c00
            );

            color: #080808;
            font-size: 16px;
            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 10px 30px rgba(212, 175, 55, 0.20);

            transition: 0.3s;
            margin-top: 5px;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow:
                0 15px 35px rgba(212, 175, 55, 0.30);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* Demo account */
        .demo {
            margin-top: 24px;
            padding: 15px;
            border-radius: 14px;

            background: rgba(212, 175, 55, 0.05);
            border: 1px solid rgba(212, 175, 55, 0.12);

            text-align: center;
            font-size: 13px;
            color: #888;
        }

        .demo strong {
            color: #d4af37;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #555;
            font-size: 12px;
        }

        @media (max-width: 500px) {
            .login-card {
                padding: 30px 22px;
                border-radius: 22px;
            }

            .title {
                font-size: 25px;
            }

            .logo {
                width: 70px;
                height: 70px;
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>

    <div class="sparkle s1"></div>
    <div class="sparkle s2"></div>
    <div class="sparkle s3"></div>
    <div class="sparkle s4"></div>

    <div class="login-container">

        <div class="login-card">

            <div class="logo">
                A
            </div>

            <h1 class="title">
                ASTS ADMIN
            </h1>

            <p class="subtitle">
                Luxury Student Management System
            </p>

            <?php if ($error): ?>
                <div class="error">
                    ⚠ <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST">

                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            👤
                        </span>

                        <input
                            type="text"
                            name="username"
                            placeholder="Masukkan username"
                            autocomplete="username"
                            required
                        >

                    </div>

                </div>

                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            🔐
                        </span>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            id="toggleButton"
                        >
                            👁
                        </button>

                    </div>

                </div>

                <button
                    type="submit"
                    class="login-btn"
                    id="loginButton"
                >
                    ✦ MASUK KE DASHBOARD
                </button>

            </form>

            <div class="demo">
                Username: <strong>admin</strong>
                &nbsp; | &nbsp;
                Password: <strong>admin123</strong>
            </div>

            <div class="footer">
                © 2026 ASTS Student Management
            </div>

        </div>

    </div>

    <script>
        function togglePassword() {

            const password = document.getElementById("password");
            const button = document.getElementById("toggleButton");

            if (password.type === "password") {
                password.type = "text";
                button.textContent = "🙈";
            } else {
                password.type = "password";
                button.textContent = "👁";
            }
        }

        document.querySelector("form").addEventListener("submit", function () {

            const button = document.getElementById("loginButton");

            button.innerHTML = "⏳ MEMPROSES...";
            button.style.opacity = "0.7";
            button.style.pointerEvents = "none";

        });
    </script>

</body>
</html>