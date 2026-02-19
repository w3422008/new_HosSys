<?php
// 共通用関数呼び出し
require_once APP_PATH . 'Models/common/Common.php';

// クラスのインスタンス化（呼び出し）
$common = new CommonModels();

// IDをもとに、ユーザーデータを取得・返却
$id = "k0123456";
// $id = $_SESSION['id'];


