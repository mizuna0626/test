<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(name,mail,age,comments)values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>


<!doctype HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お問合わせフォームを作る</title>
<link rel="stylesheet"type="text/css" href="style2.css">
</head>
    
    <body>
<h1>お問合わせフォーム</h1>
<div class="confirm">
<p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
</p>
</div>

</body>
</html>