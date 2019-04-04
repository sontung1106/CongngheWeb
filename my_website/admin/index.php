<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="jquery.js"></script>
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName">
        <label for="userPass">Password:</label>
        <input type="password" name="userPass" id="userPass">
        <input type="button" value="Login" name="smLogin" id="smLogin">
    </form>
    <div id="nhanVe"></div>
    
    <script >
        $(document).ready(function(){

            $("#smLogin").click(function(){
                

                // $.get("checkLogin.php",{userName:$("#userName").val(),userPass:$("#userPass").val()},function(data){
                //     $("#nhanVe").text(data);
                // });

                $.ajax({
                    type:"POST",
                    url:"checkLogin.php",
                    data:{userName:$("#userName").val(),userPass:$("#userPass").val()},
                    success:function(data){
                       // $("#nhanVe").text(data);
                        window.location.href="/admin/insert_db";
                    },
                    error:function(){
                        alert("loi. Sai userName or userPass");
                    }
                });


            })
        })
    </script>
</body>
</html>