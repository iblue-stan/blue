<?php

$username = filter_input(INPUT_POST, "username");
$name = filter_input(INPUT_POST, "name");
$pass = filter_input(INPUT_POST, "username");

if ($name == "123" && $pass == "123") {
    session_start();
    $_SESSION["username_session"] = $username;
    setcookie("username_cookie",$username,time()+86400);
    echo $username;
    echo "帳號密碼正確，即將進入系統";
    header("Refresh: 1; index.php");
} else {
    echo "帳號密碼錯誤喔！！";
    header("Refresh: 1; index.php");
}

echo "AAA";
echo "BBB";
echo "CCC";
