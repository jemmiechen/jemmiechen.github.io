<?
//連結SQL Server
    $conn = mssql_connect("127.0.0.1", "sa", "12345");
//選擇資料庫
    mssql_select_db("BBS", $conn);  

//將單引號置換為雙引號
Function chgStr($data)
{
   $chgStr = "'" . str_replace("'", "''", $data) . "'";
   return $chgStr;
}

//將資料寫入資料庫
$sql = "Insert Into 主標題 (姓名, Email, 主題, 內容, 篇數) Values (";
$sql = $sql . chgStr($_REQUEST["姓名"]) . ",";
$sql = $sql . chgStr($_REQUEST["Email"]) . ",";
$sql = $sql . chgStr($_REQUEST["主題"]) . ",";
$sql = $sql . chgStr(nl2br($_REQUEST["內容"])) . ",";
$sql = $sql . 0 . ")";
mssql_query($sql);

header("Location: index.php"); 
?>