<?php

// POSTデータ取得
$mname = $_POST["master_name"];

$name = $_POST["name"];
$date = $_POST["date"];
$title = $_POST["title"];
$cont = $_POST["content"];
$eval = $_POST["evaluation"];
$dep = $_POST["client_dep"];
$cname = $_POST["client_name"];

// 配列化
$datas = array("$name","$date","$title","$cont","$eval","$dep","$cname"); 
$fp = fopen('data1.csv', 'a');
    fputcsv($fp,$datas);
fclose($fp);

// read.phpにリダイレクト
// header("Location: read_personal.php");
// exit();

?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="./css/sample.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Shippori+Antique&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="headerfont">MC CheerUP Form</h1>
    <div class="center_write">
        <div class="write1">書き込みが完了しました！</div>
        <p class="write1"><a href="index.php">戻る</a></p>
    </div>
</body>
</html> 

