<?php
// DB接続用情報クラス
require_once '../../Repositories/common/ConnectToDB.php';

// DB接続・SQL実行などを行うクラス
class FetchBasicInfo
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

    // IDをもとに、ユーザーデータを取得・返却
    public function fetchUserDataFromDatabase($id)
    {
        try {
            // SQLクエリの準備
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $stmt = $this->dbh->prepare($sql);
            // パラメータのバインド
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // クエリの実行
            $stmt->execute();
            // 結果の取得
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
            return $userData;
        } catch (PDOException $e) {
            // エラー処理
            die("ユーザーデータの取得エラー: " . $e->getMessage());
        }
    }
}
