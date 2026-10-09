<?
session_start();
if (!session_is_registered("chk") || $_SESSION["chk"]<>"yes")
{
 $msg="";
 if ($_REQUEST["userid"]<>"ftp")
  {
    $msg="登入帳號錯誤";
  }
 else if ($_REQUEST["pas"]<>"siemens")
  {
    $msg="密碼輸入錯誤";
  }
 else if ($_REQUEST["pas"]<>"siemens" || $_REQUEST["userid"]<>"ftp")
  {
    $msg="密碼輸入錯誤";
  }
 else
  {
    $msg="驗證通過";
    $_SESSION["chk"]="yes";
  }
}
else
{
$msg="已驗證通過";
}
?>

<HTML><HEAD>
<TITLE>管理員專區</TITLE>
</HEAD><BODY>
<body bgcolor="#FFFFCC" text="#000000" leftmargin="10" topmargin="0" marginwidth="0" marginheight="0">
<Center><H3><?=$msg?></H3><HR>
</BODY>
</HTML>
