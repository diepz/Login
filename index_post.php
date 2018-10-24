<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .login {
            width: 400px;
            height: 200px;
            border: 1px solid darkblue;
            margin:1px 40%;
            padding: 10px;
        }
        .login input {
            margin: 1px 1px;

        }
            .login input:hover {
                color: red;
            }
    </style>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>

        <br>
        Id:
        <br>
        <input type="text" name="username" placeholder="username" size="30"><br>
        Pass:
        <br>
        <input type="password" name="password" placeholder="password" size="30"><br>
        <input type="submit" value="Sign in" class="ipt_login">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Wellcome <span style='color: aqua'> $username </span></h2>";
    } else {
        echo "<h2>Login <span style='color: darkgreen'> Fail </span></h2>";
    }
}
?>

</body>
</html>