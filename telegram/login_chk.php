<?php
if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}

$userid = isset($_REQUEST["userid"]) ? $_REQUEST["userid"] : "";
$pas = isset($_REQUEST["pas"]) ? $_REQUEST["pas"] : "";

$is_ok = false;
$msg = "";

if (isset($_SESSION["chk"]) && $_SESSION["chk"] === "yes") {
    $is_ok = true;
    $msg = "已驗證通過";
} else {
    if ($userid !== "ftp") {
        $msg = "登入帳號錯誤";
    } else if ($pas !== "siemens") {
        $msg = "密碼輸入錯誤";
    } else {
        $msg = "驗證通過";
        $_SESSION["chk"] = "yes";
        $is_ok = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理員專區 - 驗證結果</title>
<style>
  body {
    background-color: #FFFFCC;
    font-family: Arial, "新細明體", sans-serif;
    text-align: center;
    padding-top: 40px;
  }
  .btn {
    display: inline-block;
    background: #0066cc;
    color: #ffffff;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 20px;
  }
  .btn:hover {
    background: #004499;
  }
</style>
</head>
<body>
  <h2><?=$msg?></h2>
  <hr style="width: 60%; margin: 20px auto;">
  <?php if ($is_ok): ?>
    <p style="color: green; font-size: 16px;"><b>身份驗證成功，您可以直接進入資料庫選單進行表格編輯！</b></p>
    <a href="login2.php" class="btn" target="_self">進入資料庫管理選單 (可編輯表格)</a>
    <script>
      setTimeout(function() {
        window.location.href = "login2.php";
      }, 1500);
    </script>
  <?php else: ?>
    <p style="color: red; font-size: 15px;">帳號或密碼不正確，請重新登入。</p>
    <a href="login3.php" class="btn" style="background:#888;">返回登入</a>
  <?php endif; ?>
</body>
</html>
