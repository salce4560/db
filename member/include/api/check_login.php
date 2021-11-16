<?php

// $account=$_POST['account'];
// $password=$_POST['account'];

$sql="SELECT * From  `account`  WHERE `account` ='{$_POST['$account']}' && `password`='{$_POST['password']}'";
echo  $sql;

$dsn="mysql:host=localhost;charset=utf8;dbname=member;
$pdo=new PDO($dsn,'root','');

$result=$pdo->query($sql)->fetch();
echo $result['account'];
echo $result['password'];
if($_POST['account']==$result['account'] && $_POST['password']==$result['password']){
    echo" 登入成功";}
    eles{



?>


