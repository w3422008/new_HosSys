<?php
class CommonModels
{
    // IDをもとに、ユーザーデータを取得・返却
    public function getUserData($id)
    {
        // ユーザー情報取得関数の呼び出し
        $userData = $this->fetchUserDataFromDatabase($id);
        return $userData;
    }
}