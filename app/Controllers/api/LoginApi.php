<?php
header('Content-Type: application/json; charset=UTF-8');

// ログイン認証処理を実行
// Services/login/login.php：入力値の取得、ログイン認証処理の呼び出し
// Models：
// Repositories：ユーザー情報取得、認証結果の返却

// ログイン処理の呼び出し
require_once __DIR__ . '/../../Services/login/login.php';
