<?php

// 初期処理
session_start();

// セッション値設定
if(!isset($_SESSION['st'])){
    // 値設定
    $_SESSION['st'] = "Session Create ：" . date('Y-m-d H:i:s');
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count'] += 1;
}

?>
<html>
<head>
</head>
<body>
<h1>Session Hijack Test</h1>
<?php echo $_SESSION['st'] ?><br>
This Session count ： <?php echo $_SESSION['count'] ?><br>
----<br>
<?php echo 'Cookie Session Id ： ' . $_COOKIE['PHPSESSID'] ?><br>
</body>
</html>
