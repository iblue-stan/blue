<?php

require_once '../DB_config.php';
require_once '../DB_class.php';

$prod_name = $_POST["prod_name"];
$price = $_POST["price"];
$kind = $_POST["kind"];
$memo = $_POST["memo"];

$sql = "insert into product (product_name,price,kind,memo) values('$prod_name','$price','$kind','$memo')";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

echo "資料新增成功，三秒後回到上一頁";
header('refresh:3;url=9.php');

//while ($result = $db->fetch_array()) {
//    print_r($result);
//}