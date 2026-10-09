<%
path="c:\Inetpub\wwwroot\school\1108\1108.mdb"
set conn=server.CreateObject("adodb.connection")
conn.Open "driver={microsoft access driver (*.mdb)};dbq="+path+""
%>