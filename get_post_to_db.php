<?php
if(isset($_GET["comment"])){
$comment = $_GET["comment"];
echo $comment;
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = "http://61.115.113.199/pg/price_serch.php" method = "get">
<input type = "text" name ="comment"/><br/>
<input type ="submit" value ="送信"/>
</form>
</body>
</html>