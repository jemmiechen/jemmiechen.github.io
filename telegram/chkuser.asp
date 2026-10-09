<!-- #include file="link_file.asp" -->
<%
'**********************接查詢變數**********************************
user_name=request("user_name")
user_id=request("user_id")


 if len(user_id) < 4 then 
    response.redirect ("demo/login.htm?error=1")
 end if
 
 if len(user_name) > 10 then 
    response.redirect ("demo/login.htm?error=1")
 end if



'*******************************************************************
  set rs=conn.Execute("select * from k_user  where (user_name like '%"+user_name+"%') order by id")

 if rs.eof then
    response.redirect ("demo/login.htm?error=1")
 end if

user_man=rs("user_man")
%>

<%
 
      if ((user_name = rs("user_name")) and (user_id = rs("user_id")) and (user_man="man")) then
         response.cookies("cook_name")=request("user_name")
         response.cookies("cook_id")=request("user_id")
         response.cookies("user_man")=request("user_man")
         response.redirect ("demo/index.htm")
      else  
         if ((user_name = rs("user_name")) and (user_id = rs("user_id"))) then
           response.cookies("cook_name")=request("user_name")
           response.cookies("cook_id")=request("user_id")
           response.cookies("user_man")=request("user_man")
           response.redirect ("demo/index_user.htm")
         end if

         response.redirect ("demo/login.htm?error=1")
   end if

%>