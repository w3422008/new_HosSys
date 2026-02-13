<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* ナビゲーションバーのスタイル */
    .navbar {
        border-bottom: 1px solid #e5e5e5;
        padding: 3rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
    }

    /* ユーザーメニューボタン */
    .navbar-user-btn {
        background: none;
        border: none;
        font-size: 24px;
        color: #666;
        cursor: pointer;
        padding: 8px;
        transition: color 0.2s ease;
        position: relative;
    }

    .navbar-user-btn:hover {
        color: #333;
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

    /* ユーザー情報 */
    .user-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
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
        <button class="navbar-user-btn" onclick="toggleDropdown()" title="ユーザーメニュー">
            👤
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