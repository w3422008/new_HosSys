<?php

// DB接続用クラスを記述しているファイルを呼び出す
require_once '../../Repositories/common/FetchBasicInfo.php';

class CommonModels
{

    // クラスインスタンス用変数
    private $FetchBasicInfo;

    public function __construct()
    {

        // 共通用関数呼び出し
        $this->FetchBasicInfo = new FetchBasicInfo();

    }

    // IDをもとに、ユーザーデータを取得・返却
    public function getUserData($id)
    {
        // ユーザー情報取得関数の呼び出し
        $userData = $this->FetchBasicInfo->fetchUserDataFromDatabase($id);
        return $userData;
    }
}