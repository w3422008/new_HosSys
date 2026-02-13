<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* ナビゲーションバーのスタイル */
    .navbar {
        border-bottom: 1px solid #e5e5e5;
        padding: 2.5rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
    }

    /* ユーザーメニューボタン */
    .navbar-user-btn {
        background: none;
        border: none;
        font-size: 2.5rem;
        color: #217a3a;
        cursor: pointer;
        padding: 8px;
        transition: color 0.2s ease;
        position: relative;
    }

    .navbar-user-btn:hover {
        color: #333;
    }

    .navbar-user-btn svg path {
        fill: #217a3a;
        transition: fill 0.2s ease;
    }

    .navbar-user-btn:hover svg path {
        fill: #333;
    }

    /* ドロップダウンメニュー */
    .dropdown-menu {
        position: absolute;
        top: 60px;
        right: 24px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        min-width: 165px;
        z-index: 1000;
        display: none;
        overflow: hidden;
    }

    .dropdown-menu.active {
        display: block;
    }

    .dropdown-menu-item {
        padding: 12px 16px;
        list-style: none;
    }

    .dropdown-menu-item:first-child {
        padding-top: 12px;
    }

    .dropdown-menu-item:last-child {
        padding-bottom: 12px;
    }

    /* ロールバッジ */
    .role-badge {
        display: inline-block;
        background-color: #808080;
        color: white;
        padding: 4px 12px;
        border-radius: 16px;
        font-size: 12px;
        font-weight: 500;
    }

    .user-id {
        color: #808080;
        font-size: 13px;
        font-weight: 500;
    }

    .user-name {
        color: #333;
        font-size: 14px;
        font-weight: 500;
    }

    /* 区切り線 */
    .dropdown-divider {
        height: 1px;
        background-color: #e5e5e5;
        margin: 8px 10px;
    }

    /* メニューリンク */
    .dropdown-link {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #333;
        text-decoration: none;
        font-size: 14px;
        padding: 10px 16px;
        transition: background-color 0.2s ease;
    }

    .dropdown-link:hover {
        background-color: #f9f9f9;
        color: #333;
    }
</style>

<!-- ナビゲーションバー -->
<nav class="navbar">

    <h1 class="title">neoシステム（仮）</h1>
    <div style="position: relative;">
        <!-- ユーザーメニューボタン -->
        <button class="navbar-user-btn user-icon" onclick="toggleDropdown()" title="ユーザーメニュー">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24"
                height="24"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path
                    d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z" />
            </svg>
        </button>

        <!-- ドロップダウンメニュー -->
        <div class="dropdown-menu" id="userDropdown">
            <div class="dropdown-menu-item">
                <span class="role-badge">管理者</span>
            </div>
            <div class="dropdown-menu-item">
                <div class="user-info">
                    <span class="user-id">k6954231</span>
                    <span class="user-name">わたし</span>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-link dropdown-menu-item">
                <span>パスワード変更</span>
            </a>
            <a href="logout.php" class="dropdown-link dropdown-menu-item">
                <span>ログアウト</span>
            </a>
        </div>
    </div>
</nav>

<script src="<?php echo JS_PATH; ?>common.js"></script>