<?php
class ConnectToDB
{
    // config/database.phpよりDB接続情報を取得
    private $db_config;
    private $host;
    private $port;
    private $dbname;
    private $username;
    private $password;

    public $dbh;

    // 'host' => 'localhost',
    // 'port' => '3306',
    // 'user' => 'root',
    // 'password' => '',
    // 'database' => 'newhptldb'


    public function __construct()
    {
        // DB接続情報の読み込み
        $this->db_config = require_once '../../../config/database.php';

        // DB接続情報の設定
        $this->host = $this->db_config['host'];
        $this->port = $this->db_config['port'];
        $this->dbname = $this->db_config['database'];
        $this->username = $this->db_config['user'];
        $this->password = $this->db_config['password'];

        try {
            // PDOを使用してDB接続を確立
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";
            $this->dbh = new PDO($dsn, $this->username, $this->password);
            // エラー処理の設定
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // 接続エラーが発生した場合の処理
            die("DB接続エラー: " . $e->getMessage());
        }
    }

    // DB接続オブジェクトを返すメソッド
    public function returndbh()
    {
        return $this->dbh;
    }

}