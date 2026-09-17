```php
<?php
include "auth.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa | ASTS Luxury Admin</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --gold: #d4af37;
            --gold-light: #f5d77a;
            --gold-soft: #b8962e;
            --black: #070707;
            --dark: #0d0d0f;
            --dark-2: #121214;
            --dark-3: #19191c;
            --text: #f5f5f5;
            --muted: #99999f;
            --border: rgba(212, 175, 55, 0.18);
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background:
                radial-gradient(circle at 15% 20%, rgba(212, 175, 55, 0.08), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(212, 175, 55, 0.06), transparent 30%),
                var(--black);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .background {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.18;
            animation: floatOrb 10s ease-in-out infinite;
        }

        .orb.one {
            width: 300px;
            height: 300px;
            background: #d4af37;
            top: -100px;
            left: 15%;
        }

        .orb.two {
            width: 260px;
            height: 260px;
            background: #8c6b16;
            bottom: -100px;
            right: 10%;
            animation-delay: -4s;
        }

        .orb.three {
            width: 180px;
            height: 180px;
            background: #f5d77a;
            top: 45%;
            right: 30%;
            opacity: 0.07;
            animation-delay: -7s;
        }

        @keyframes floatOrb {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(40px, -30px) scale(1.1);
            }
        }

        .sparkle {
            position: absolute;
            color: var(--gold-light);
            opacity: 0.4;
            animation: sparkle 4s ease-in-out infinite;
        }

        .sparkle:nth-child(4) {
            top: 15%;
            left: 30%;
        }

        .sparkle:nth-child(5) {
            top: 70%;
            left: 8%;
            animation-delay: -2s;
        }

        .sparkle:nth-child(6) {
            top: 30%;
            right: 8%;
            animation-delay: -1s;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0.15;
                transform: scale(0.8) rotate(0deg);
            }

            50% {
                opacity: 0.8;
                transform: scale(1.3) rotate(180deg);
            }
        }

        .app {
            position: relative;
            z-index: 1;
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 270px;
            min-height: 100vh;
            background: rgba(10, 10, 11, 0.9);
            border-right: 1px solid var(--border);
            backdrop-filter: blur(20px);
            padding: 28px 18px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
            animation: sidebarIn 0.7s ease;
        }

        @keyframes sidebarIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 0 10px 25px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5d77a, #b88b18);
            color: #090909;
            font-size: 22px;
            font-weight: 900;
            box-shadow:
                0 0 25px rgba(212,175,55,0.25),
                inset 0 1px rgba(255,255,255,0.5);
        }

        .brand-text h2 {
            font-size: 17px;
            letter-spacing: 1px;
        }

        .brand-text span {
            font-size: 11px;
            color: var(--gold-light);
            letter-spacing: 2px;
        }

        .admin-profile {
            margin-top: 18px;
            padding: 13px;
            border: 1px solid rgba(212,175,55,0.12);
            background: rgba(212,175,55,0.045);
            border-radius: 13px;
        }

        .admin-label {
            font-size: 9px;
            color: #666;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .admin-name {
            color: var(--gold-light);
            font-size: 13px;
            font-weight: 600;
        }

        .menu-title {
            font-size: 10px;
            color: #68686d;
            letter-spacing: 2px;
            margin: 27px 12px 12px;
            text-transform: uppercase;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .nav-link {
            position: relative;
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 14px;
            border-radius: 12px;
            text-decoration: none;
            color: #99999f;
            font-size: 14px;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .nav-link::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                90deg,
                rgba(212,175,55,0.15),
                transparent
            );
            opacity: 0;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #fff;
            transform: translateX(4px);
        }

        .nav-link:hover::before {
            opacity: 1;
        }

        .nav-link.active {
            color: var(--gold-light);
            background: rgba(212,175,55,0.1);
            border: 1px solid rgba(212,175,55,0.15);
        }

        .nav-icon {
            width: 23px;
            text-align: center;
            font-size: 17px;
        }

        .logout-link {
            color: #ff9999;
        }

        .logout-link:hover {
            color: #ffb3b3;
            background: rgba(255,80,80,0.07);
        }

        .sidebar-bottom {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 25px;
        }

        .status {
            padding: 15px;
            border: 1px solid rgba(212,175,55,0.15);
            background: rgba(212,175,55,0.05);
            border-radius: 14px;
        }

        .status-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #aaa;
        }

        .online {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #6ee7b7;
            box-shadow: 0 0 10px #6ee7b7;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.8);
            }
        }

        /* MAIN */

        .main {
            margin-left: 270px;
            width: calc(100% - 270px);
            padding: 34px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 35px;
            animation: fadeUp 0.7s ease;
        }

        .page-title small {
            display: block;
            color: var(--gold-light);
            font-size: 11px;
            letter-spacing: 2px;
            margin-bottom: 7px;
            text-transform: uppercase;
        }

        .page-title h1 {
            font-size: 31px;
            letter-spacing: -0.5px;
        }

        .page-title p {
            margin-top: 7px;
            color: var(--muted);
            font-size: 14px;
        }

        .top-badge {
            padding: 10px 16px;
            border-radius: 30px;
            border: 1px solid var(--border);
            background: rgba(212,175,55,0.06);
            color: var(--gold-light);
            font-size: 12px;
        }

        /* STATS */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            background: linear-gradient(
                145deg,
                rgba(255,255,255,0.055),
                rgba(255,255,255,0.018)
            );
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 22px;
            backdrop-filter: blur(15px);
            transition: all 0.35s ease;
            animation: fadeUp 0.7s ease backwards;
        }

        .stat-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .stat-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .stat-card::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(212,175,55,0.12);
            filter: blur(35px);
            right: -30px;
            top: -30px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(212,175,55,0.35);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-label {
            color: #999;
            font-size: 13px;
        }

        .stat-icon {
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: rgba(212,175,55,0.1);
            color: var(--gold-light);
            font-size: 17px;
        }

        .stat-number {
            margin-top: 14px;
            font-size: 30px;
            font-weight: 700;
        }

        /* CONTENT */

        .content-card {
            background: rgba(13,13,15,0.82);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 22px;
            overflow: hidden;
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 70px rgba(0,0,0,0.25);
            animation: fadeUp 0.8s ease 0.25s backwards;
        }

        .content-header {
            padding: 23px 25px;
            border-bottom: 1px solid rgba(255,255,255,0.07);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .content-header h2 {
            font-size: 18px;
        }

        .content-header p {
            font-size: 12px;
            color: #777;
            margin-top: 4px;
        }

        .btn-add {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            background: linear-gradient(135deg, #f1d26b, #b58b20);
            color: #101010;
            border-radius: 11px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 7px 20px rgba(212,175,55,0.15);
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(212,175,55,0.28);
        }

        /* FILTER */

        .filter-area {
            display: flex;
            gap: 12px;
            padding: 20px 25px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .search-box {
            position: relative;
            flex: 1;
        }

        .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .search-input,
        .filter-select {
            width: 100%;
            background: rgba(255,255,255,0.035);
            border: 1px solid rgba(255,255,255,0.09);
            color: #eee;
            border-radius: 11px;
            padding: 12px 14px;
            outline: none;
            transition: 0.3s;
            font-size: 13px;
        }

        .search-input {
            padding-left: 42px;
        }

        .search-input:focus,
        .filter-select:focus {
            border-color: rgba(212,175,55,0.5);
            box-shadow: 0 0 0 3px rgba(212,175,55,0.07);
            background: rgba(255,255,255,0.055);
        }

        .filter-select {
            width: 170px;
            cursor: pointer;
        }

        .filter-select option {
            background: #151515;
            color: #fff;
        }

        /* TABLE */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1050px;
        }

        th {
            text-align: left;
            padding: 16px 18px;
            color: #777;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            background: rgba(255,255,255,0.018);
        }

        td {
            padding: 16px 18px;
            border-top: 1px solid rgba(255,255,255,0.055);
            font-size: 13px;
            color: #d8d8da;
        }

        tbody tr {
            transition: 0.3s;
            animation: rowIn 0.45s ease backwards;
        }

        tbody tr:hover {
            background: rgba(212,175,55,0.045);
        }

        @keyframes rowIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .id-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 31px;
            height: 31px;
            border-radius: 9px;
            background: rgba(212,175,55,0.08);
            color: var(--gold-light);
            font-weight: 700;
            font-size: 12px;
        }

        .name-cell {
            font-weight: 600;
            color: #fff;
        }

        .nisn {
            color: var(--gold-light);
            font-family: Consolas, monospace;
            letter-spacing: 0.5px;
        }

        .gender {
            display: inline-flex;
            padding: 5px 9px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .gender.male {
            color: #9fc5ff;
            background: rgba(90,140,220,0.1);
        }

        .gender.female {
            color: #ffb8d1;
            background: rgba(220,100,150,0.1);
        }

        .email {
            color: #aaa;
        }

        .address {
            max-width: 220px;
            color: #888;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.035);
            cursor: pointer;
            transition: 0.3s;
        }

        .edit-btn {
            color: var(--gold-light);
        }

        .edit-btn:hover {
            background: rgba(212,175,55,0.12);
            border-color: rgba(212,175,55,0.3);
            transform: translateY(-2px);
        }

        .delete-btn {
            color: #ff8f8f;
        }

        .delete-btn:hover {
            background: rgba(255,80,80,0.1);
            border-color: rgba(255,80,80,0.25);
            transform: translateY(-2px);
        }

        /* PAGINATION */

        .table-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 25px;
            border-top: 1px solid rgba(255,255,255,0.06);
        }

        .showing {
            color: #777;
            font-size: 12px;
        }

        .pagination {
            display: flex;
            gap: 6px;
        }

        .page-btn {
            min-width: 34px;
            height: 34px;
            padding: 0 9px;
            border-radius: 9px;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.035);
            color: #999;
            cursor: pointer;
            transition: 0.3s;
        }

        .page-btn:hover:not(:disabled) {
            border-color: rgba(212,175,55,0.3);
            color: var(--gold-light);
        }

        .page-btn.active {
            background: linear-gradient(135deg, #d8b642, #9c7517);
            color: #111;
            border-color: transparent;
            font-weight: 700;
        }

        .page-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .loading {
            text-align: center;
            padding: 60px 20px;
            color: #777;
        }

        .spinner {
            width: 38px;
            height: 38px;
            border: 3px solid rgba(212,175,55,0.15);
            border-top-color: var(--gold);
            border-radius: 50%;
            margin: 0 auto 15px;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .empty {
            text-align: center;
            padding: 60px 20px;
            color: #777;
        }

        .empty-icon {
            font-size: 35px;
            margin-bottom: 12px;
            opacity: 0.6;
        }

        /* MODAL */

        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.75);
            backdrop-filter: blur(8px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 100;
            padding: 20px;
        }

        .modal.show {
            display: flex;
            animation: modalBg 0.25s ease;
        }

        @keyframes modalBg {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-box {
            width: 100%;
            max-width: 420px;
            background: #111113;
            border: 1px solid rgba(212,175,55,0.2);
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.5);
            animation: modalIn 0.35s ease;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(15px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal-icon {
            width: 52px;
            height: 52px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,80,80,0.1);
            color: #ff8585;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .modal-box h3 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .modal-box p {
            color: #888;
            font-size: 13px;
            line-height: 1.7;
        }

        .modal-actions {
            display: flex;
            gap: 10px;
            margin-top: 24px;
        }

        .modal-btn {
            flex: 1;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.08);
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .cancel-btn {
            background: rgba(255,255,255,0.04);
            color: #aaa;
        }

        .cancel-btn:hover {
            background: rgba(255,255,255,0.08);
        }

        .confirm-btn {
            background: #b83c3c;
            color: #fff;
        }

        .confirm-btn:hover {
            background: #d34b4b;
            transform: translateY(-2px);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1000px) {
            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
                padding: 25px;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 760px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
                border-right: none;
                border-bottom: 1px solid var(--border);
            }

            .sidebar-bottom {
                position: static;
                margin-top: 25px;
            }

            .main {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            .app {
                display: block;
            }

            .topbar {
                align-items: flex-start;
            }

            .top-badge {
                display: none;
            }

            .content-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .filter-area {
                flex-direction: column;
            }

            .filter-select {
                width: 100%;
            }

            .table-footer {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

<div class="background">
    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>

    <div class="sparkle">✦</div>
    <div class="sparkle">✧</div>
    <div class="sparkle">✦</div>
</div>

<div class="app">

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">A</div>

            <div class="brand-text">
                <h2>ASTS ADMIN</h2>
                <span>LUXURY SYSTEM</span>
            </div>
        </div>

        <div class="admin-profile">
            <div class="admin-label">Logged In As</div>

            <div class="admin-name">
                <?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?>
            </div>
        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <nav class="nav-menu">

            <a href="dashboard.php" class="nav-link">
                <span class="nav-icon">⌂</span>
                <span>Dashboard</span>
            </a>

            <a href="index.php" class="nav-link active">
                <span class="nav-icon">▦</span>
                <span>Data Siswa</span>
            </a>

            <a href="tambah.php" class="nav-link">
                <span class="nav-icon">＋</span>
                <span>Tambah Data</span>
            </a>

            <a href="logout.php" class="nav-link logout-link">
                <span class="nav-icon">⇥</span>
                <span>Logout</span>
            </a>

        </nav>

        <div class="sidebar-bottom">

            <div class="status">

                <div class="status-row">
                    <span class="online"></span>
                    Sistem Online
                </div>

                <div style="margin-top:7px;color:#555;font-size:10px;">
                    ASTS Student Management
                </div>

            </div>

        </div>

    </aside>

    <!-- MAIN -->

    <main class="main">

        <div class="topbar">

            <div class="page-title">

                <small>Student Management</small>

                <h1>Data Siswa</h1>

                <p>
                    Kelola seluruh data siswa dalam satu tempat.
                </p>

            </div>

            <div class="top-badge">
                ✦ Luxury Admin Panel
            </div>

        </div>

        <!-- STATISTICS -->

        <section class="stats">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Total Siswa
                    </div>

                    <div class="stat-icon">
                        ♙
                    </div>

                </div>

                <div class="stat-number" id="totalSiswa">
                    0
                </div>

            </div>

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Siswa Laki-laki
                    </div>

                    <div class="stat-icon">
                        ♂
                    </div>

                </div>

                <div class="stat-number" id="totalLaki">
                    0
                </div>

            </div>

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Siswa Perempuan
                    </div>

                    <div class="stat-icon">
                        ♀
                    </div>

                </div>

                <div class="stat-number" id="totalPerempuan">
                    0
                </div>

            </div>

        </section>

        <!-- TABLE CARD -->

        <section class="content-card">

            <div class="content-header">

                <div>

                    <h2>
                        Daftar Siswa
                    </h2>

                    <p>
                        Informasi lengkap siswa yang terdaftar.
                    </p>

                </div>

                <a href="tambah.php" class="btn-add">
                    ＋ Tambah Siswa
                </a>

            </div>

            <!-- FILTER -->

            <div class="filter-area">

                <div class="search-box">

                    <span class="search-icon">
                        ⌕
                    </span>

                    <input
                        type="text"
                        id="searchInput"
                        class="search-input"
                        placeholder="Cari nama, NISN, atau email..."
                    >

                </div>

                <select
                    id="genderFilter"
                    class="filter-select"
                >

                    <option value="">
                        Semua Gender
                    </option>

                    <option value="MALE">
                        Laki-laki
                    </option>

                    <option value="FEMALE">
                        Perempuan
                    </option>

                </select>

            </div>

            <!-- TABLE -->

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nama Siswa</th>
                            <th>NISN</th>
                            <th>TTL</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody id="dataTable">

                        <tr>

                            <td colspan="8">

                                <div class="loading">

                                    <div class="spinner"></div>

                                    Memuat data siswa...

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <!-- FOOTER -->

            <div class="table-footer">

                <div
                    class="showing"
                    id="showingText"
                >
                    Menampilkan data...
                </div>

                <div
                    class="pagination"
                    id="pagination"
                ></div>

            </div>

        </section>

    </main>

</div>

<!-- DELETE MODAL -->

<div
    class="modal"
    id="deleteModal"
>

    <div class="modal-box">

        <div class="modal-icon">
            !
        </div>

        <h3>
            Hapus Data?
        </h3>

        <p>
            Data siswa yang dihapus tidak dapat dikembalikan.
            Apakah kamu yakin ingin menghapus data ini?
        </p>

        <div class="modal-actions">

            <button
                class="modal-btn cancel-btn"
                onclick="tutupModal()"
            >
                Batal
            </button>

            <button
                class="modal-btn confirm-btn"
                onclick="konfirmasiHapus()"
            >
                Ya, Hapus
            </button>

        </div>

    </div>

</div>

<script>

let semuaData = [];
let dataFilter = [];
let halamanSekarang = 1;

const dataPerHalaman = 10;

let idHapus = null;


/* =========================
   LOAD DATA
========================= */

fetch("data_json.php")

    .then(response => {

        if (!response.ok) {
            throw new Error("Gagal mengambil data.");
        }

        return response.json();

    })

    .then(data => {

        semuaData = data;

        hitungStatistik();

        terapkanFilter();

    })

    .catch(error => {

        document.getElementById("dataTable").innerHTML = `

            <tr>

                <td colspan="8">

                    <div class="empty">

                        <div class="empty-icon">
                            ⚠
                        </div>

                        <div>
                            Gagal memuat data siswa.
                        </div>

                        <small style="display:block;margin-top:8px;color:#555;">
                            Pastikan XAMPP dan database sudah aktif.
                        </small>

                    </div>

                </td>

            </tr>

        `;

        console.error(error);

    });


/* =========================
   STATISTIK
========================= */

function hitungStatistik() {

    const total = semuaData.length;

    const laki = semuaData.filter(
        siswa => siswa.gender === "MALE"
    ).length;

    const perempuan = semuaData.filter(
        siswa => siswa.gender === "FEMALE"
    ).length;


    animasiAngka(
        document.getElementById("totalSiswa"),
        total
    );

    animasiAngka(
        document.getElementById("totalLaki"),
        laki
    );

    animasiAngka(
        document.getElementById("totalPerempuan"),
        perempuan
    );

}


/* =========================
   NUMBER ANIMATION
========================= */

function animasiAngka(element, target) {

    let angka = 0;

    const durasi = 700;

    const interval = 30;

    const step = Math.max(
        1,
        Math.ceil(target / (durasi / interval))
    );

    const timer = setInterval(() => {

        angka += step;

        if (angka >= target) {

            angka = target;

            clearInterval(timer);

        }

        element.innerHTML = angka;

    }, interval);

}


/* =========================
   FILTER
========================= */

function terapkanFilter() {

    const keyword =
        document
            .getElementById("searchInput")
            .value
            .toLowerCase()
            .trim();

    const gender =
        document
            .getElementById("genderFilter")
            .value;


    dataFilter = semuaData.filter(siswa => {

        const cocokKeyword =

            siswa.name.toLowerCase().includes(keyword) ||

            siswa.nisn.toLowerCase().includes(keyword) ||

            siswa.email.toLowerCase().includes(keyword);

        const cocokGender =

            gender === "" ||

            siswa.gender === gender;

        return cocokKeyword && cocokGender;

    });


    halamanSekarang = 1;

    tampilkanData();

    buatPagination();

}


/* =========================
   DISPLAY DATA
========================= */

function tampilkanData() {

    const table =
        document.getElementById("dataTable");

    table.innerHTML = "";


    if (dataFilter.length === 0) {

        table.innerHTML = `

            <tr>

                <td colspan="8">

                    <div class="empty">

                        <div class="empty-icon">
                            ⌕
                        </div>

                        <div>
                            Data tidak ditemukan.
                        </div>

                        <small style="display:block;margin-top:8px;color:#555;">
                            Coba gunakan kata kunci pencarian lain.
                        </small>

                    </div>

                </td>

            </tr>

        `;

        document.getElementById("showingText").innerText =
            "Tidak ada data";

        return;

    }


    const mulai =
        (halamanSekarang - 1) * dataPerHalaman;

    const akhir =
        mulai + dataPerHalaman;

    const dataHalaman =
        dataFilter.slice(mulai, akhir);


    dataHalaman.forEach((siswa, index) => {

        const nomor =
            mulai + index + 1;


        const genderClass =
            siswa.gender === "MALE"
                ? "male"
                : "female";


        const genderText =
            siswa.gender === "MALE"
                ? "LAKI-LAKI"
                : "PEREMPUAN";


        const row =
            document.createElement("tr");


        row.style.animationDelay =
            `${index * 0.04}s`;


        row.innerHTML = `

            <td>

                <span class="id-badge">
                    ${nomor}
                </span>

            </td>

            <td>

                <div class="name-cell">
                    ${escapeHTML(siswa.name)}
                </div>

            </td>

            <td>

                <span class="nisn">
                    ${escapeHTML(siswa.nisn)}
                </span>

            </td>

            <td>
                ${escapeHTML(siswa.ttl)}
            </td>

            <td>

                <span class="gender ${genderClass}">
                    ${genderText}
                </span>

            </td>

            <td>

                <span class="email">
                    ${escapeHTML(siswa.email)}
                </span>

            </td>

            <td>

                <div class="address">
                    ${escapeHTML(siswa.address)}
                </div>

            </td>

            <td>

                <div class="actions">

                    <a
                        href="edit.php?id=${siswa.id}"
                        class="action-btn edit-btn"
                        title="Edit data"
                    >
                        ✎
                    </a>

                    <button
                        class="action-btn delete-btn"
                        title="Hapus data"
                        onclick="bukaModal(${siswa.id})"
                    >
                        ×
                    </button>

                </div>

            </td>

        `;


        table.appendChild(row);

    });


    const dari =
        mulai + 1;

    const sampai =
        Math.min(
            akhir,
            dataFilter.length
        );


    document.getElementById("showingText").innerText =
        `Menampilkan ${dari}-${sampai} dari ${dataFilter.length} data`;

}


/* =========================
   PAGINATION
========================= */

function buatPagination() {

    const container =
        document.getElementById("pagination");

    container.innerHTML = "";


    const totalHalaman =
        Math.ceil(
            dataFilter.length / dataPerHalaman
        );


    if (totalHalaman <= 1) {
        return;
    }


    const prev =
        document.createElement("button");

    prev.className = "page-btn";

    prev.innerHTML = "‹";

    prev.disabled =
        halamanSekarang === 1;


    prev.onclick = () => {

        if (halamanSekarang > 1) {

            halamanSekarang--;

            tampilkanData();

            buatPagination();

        }

    };


    container.appendChild(prev);


    for (
        let i = 1;
        i <= totalHalaman;
        i++
    ) {

        const button =
            document.createElement("button");

        button.className =
            "page-btn" +
            (
                i === halamanSekarang
                    ? " active"
                    : ""
            );

        button.innerText = i;


        button.onclick = () => {

            halamanSekarang = i;

            tampilkanData();

            buatPagination();

        };


        container.appendChild(button);

    }


    const next =
        document.createElement("button");

    next.className = "page-btn";

    next.innerHTML = "›";

    next.disabled =
        halamanSekarang === totalHalaman;


    next.onclick = () => {

        if (
            halamanSekarang <
            totalHalaman
        ) {

            halamanSekarang++;

            tampilkanData();

            buatPagination();

        }

    };


    container.appendChild(next);

}


/* =========================
   SEARCH
========================= */

document
    .getElementById("searchInput")
    .addEventListener(
        "input",
        terapkanFilter
    );


document
    .getElementById("genderFilter")
    .addEventListener(
        "change",
        terapkanFilter
    );


/* =========================
   DELETE MODAL
========================= */

function bukaModal(id) {

    idHapus = id;

    document
        .getElementById("deleteModal")
        .classList.add("show");

}


function tutupModal() {

    idHapus = null;

    document
        .getElementById("deleteModal")
        .classList.remove("show");

}


function konfirmasiHapus() {

    if (!idHapus) {
        return;
    }

    window.location.href =
        "hapus.php?id=" + idHapus;

}


/* =========================
   ESC CLOSE MODAL
========================= */

document.addEventListener(
    "keydown",
    function(event) {

        if (event.key === "Escape") {
            tutupModal();
        }

    }
);


/* =========================
   CLICK OUTSIDE MODAL
========================= */

document
    .getElementById("deleteModal")
    .addEventListener(
        "click",
        function(event) {

            if (event.target === this) {
                tutupModal();
            }

        }
    );


/* =========================
   HTML ESCAPE
========================= */

function escapeHTML(value) {

    return String(value ?? "")

        .replace(/&/g, "&amp;")

        .replace(/</g, "&lt;")

        .replace(/>/g, "&gt;")

        .replace(/"/g, "&quot;")

        .replace(/'/g, "&#039;");

}

</script>

</body>
</html>
```
