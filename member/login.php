<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/head.php";?>
</head>
<body>
 <?php include "./include/header.php";?>
 <?php include "./include/nav.php";?>
 
 <?php include "./include/side_bar.php";?>
<div class="content">
<form action="./api/check_login.php" method="post">
<table>
    <tr>
        <td clospan='2'>會員登入</td>
     
    </tr>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td><input type="submit" value="登入" name="" id=""></td>
        <td><input type="reset" value="重製" name="" id=""></td>
    </tr>
</table>
</form>

</div>
 <?php include "./include/footer.php";?>
</body>
</html>