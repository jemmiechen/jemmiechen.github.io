<!-- #include file="link_file.asp" -->
<%
'**********************接查詢變數**********************************
k_no=request("k_no")
k_obj=request("k_obj")
k_num=request("k_num")
k_p=request("k_p")
k_ps=request("k_ps")
'*******************************************************************
'conn.Execute("insert into oo (no,o_name,people,p_name,class,num,money,b_year,b_mon,b_day,yea) values('"+no+"','"+o_name+"','"+people+"','"+p_name+"','"+class1+"','"+num+"','"+money+"','"+b_year+"','"+b_mon+"','"+b_day+"','"+yea+"')")

conn.Execute("insert into k_obj (k_no,k_obj,k_num,k_p,k_ps) values('"+k_no+"','"+k_obj+"','"+k_num+"','"+k_p+"','"+k_ps+"')")


response.redirect "find.asp"
%>
