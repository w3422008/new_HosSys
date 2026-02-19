<?php
// config.php（基礎設定ファイル）の読み込み
require_once '../../../config/config.php';
// セッションの開始
session_start();

// ユーザーデータの取得
require_once '../common/get_user_data.php';

// ログイン画面の表示
include_once '../../Views/home/home_view.php';