<?php
// DB接続用情報クラス
require_once '../../Repositories/common/ConnectToDB.php';

class UserAuth
{
    // DB接続クラス用変数
    private $ConnectToDB;

    // DB接続用変数
    private $dbh;

    public function __construct()
    {
        // データベースハンドルの取得
        $this->ConnectToDB = new ConnectToDB();
        $this->dbh = $this->ConnectToDB->returndbh();
    }


}
