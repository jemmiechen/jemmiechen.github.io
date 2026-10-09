<? 
session_start();
  if ( @$_SESSION["checkok"]<>"yes")
  {
    if (isset($_REQUEST["ID"]) && isset($_REQUEST["Password"])) 
    {
    $ID=$_REQUEST["ID"];
    $Password = $_REQUEST["Password"];
    //連結SQL Server
    $conn = mssql_connect("127.0.0.1", "sa", "12345");
    //選擇資料庫
    mssql_select_db("Member", $conn);
    //建立SQL命令敘述
    $SQL = "Select * From 會員認證 Where ID='" . $ID . "'";
    //執行SQL指令敘述,將執行後的結果集存放於RS中
    //此時RS的內容即是一個虛擬資料表
    $RS=mssql_query($SQL);
	   //有取得資料記錄
        if ($Fields=mssql_fetch_array($RS))
        {
          //驗證會員帳號存在
          if ($Fields["ID"]==$ID)
	    {
   	      //驗證會員密碼是否正確
              if ($Fields["Password"]==$Password)
                {
                 session_register("checkok");
   		 $_SESSION["checkok"]="yes";
                 echo "<CENTER>再按一次確定";
                 }
             }
    	 }
   }
 
?>
<HTML>
<BODY>
<body bgcolor="#FFFFCC" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<CENTER>
<FORM Action="<?=$_SERVER["PHP_SELF"];?>" Method=post>
<TABLE BORDER=2 CELLSPACING=0 >
   <TR><TD ALIGN=RIGHT>帳號</TD>
   <TD><Input Type=Text Name=ID Size=6></TD></TR>
   <TR><TD ALIGN=RIGHT>密碼</TD>
   <TD><Input Type=Password Name=Password Size=5></TD></TR>
</TABLE>
<INPUT Type=Submit Value=" 確 定 " name="B1">
</FORM>
</BODY
</HTML>
<?

exit();
}
?>
