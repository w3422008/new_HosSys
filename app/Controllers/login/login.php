<?php
// config.php（基礎設定ファイル）の読み込み
require_once '../../../config/config.php';
// セッションの開始
session_start();

// ログイン画面の表示
include_once '../../Views/login/login_view.php';