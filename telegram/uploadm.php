<?
include("check.php"); 
?>

<HTML><BODY>
<body bgcolor="#FFFFCC" text="#000000" leftmargin="10" topmargin="0" marginwidth="0" marginheight="0">
<font color="#FF0000">
 您已經通過認證</font></p>
<H3>FTP檔案上傳<HR></H3>

<Form Action="getfilem.php" Method="POST" 
Enctype="multipart/form-data">
<Input Type="File" Name="upfile[]" Size=10 ><br>
<Input Type="File" Name="upfile[]" Size=10 ><br>
<Input Type="File" Name="upfile[]" Size=10 ><br>
<Input Type="Submit" value=" 開始上傳 ">
</Form>

</BODY></HTM>