<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>home.css">
    <title>ダッシュボード</title>
</head>

<body>
    <?php include_once '../../Views/common/navigasion.php'; ?>

    <div class="main">

        <h1>ようこそ、neoシステム（仮）へ！</h1>
        <p>これはホーム画面のサンプルです。</p>

        <a href="<?php echo APP_PATH; ?>Controllers/login/login.php"><button class="logout-button">ログアウト</button></a>

    </div>

</body>

</html>