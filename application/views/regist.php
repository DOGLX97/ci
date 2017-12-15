<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
    <style>
        .warning{
            color:#f00;
        }
    </style>
</head>
<body>
    <form action="welcome/save" method="post">
        <label>
            用户名 : <input type="text" name="username"> 
            <span class="warning">
                <?php echo isset($err_name) ? $err_name : "";?>
            </span>
        </label>
        <br>
        <label>
            密码   : <input type="password" name="pwd">
        </label>
        <br>
        <label>
            确认密码: <input type="password" name="repwd">
            <span class="warning">
                <?php echo isset($err_pwd) ? $err_pwd: "";?>            
            </span>
        </label>
        <br>
        <input type="submit" value="注册">        
    </form>
</body>
</html>