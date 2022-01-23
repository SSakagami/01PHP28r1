<!DOCTYPE html>
<html>
<head>
	<title>周囲からの評価確認</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/sample.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Shippori+Antique&display=swap" rel="stylesheet">
</head>


<?php
$mname = $_POST["master_name"];

$boxname=['孫悟空','孫悟飯','孫悟天','ベジータ','トランクス',
			'ピッコロ','ヤムチャ','クリリン','天津飯','チャオズ',
			'亀仙人','牛魔王','ブゥ','ビーデル','パン'];
// XSS対策用関数作成////////////////////////////////
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}
/////////////////////////////////////////////////

// admin用一覧表示//////////////////////////////////
// if( ($fp = fopen("data1.csv","r"))== false ){
// 	die("CSVファイル読み込みエラー");
// }
 
// while (($array = fgetcsv($fp)) !== FALSE) {
	
// 	//空行を取り除く
// 	if(!array_diff($array, array(''))){
// 		continue;
// 	}
	
// 	echo "<br>";
// 	echo "<tr>";
// 	for($i = 0; $i < count($array); ++$i ){
// 		$elem = nl2br($array[$i]);
//         $elem = $elem === "" ?  "&nbsp;" : $elem;
// 		echo("<td>".$elem."</td>");
// 	}
// 	echo "</tr>";	
// }
// fclose($fp);
/////////////////////////////////////////////////

//personal表示用/////////////////////////////////
$mnamestr="";

for($i==1; $i<16; $i++){
	if($mname==$i){
		$mnamestr = $boxname[$i-1];
	}
}

//1.  DB接続します
try {
	//Password:MAMP='root',XAMPP=''
	$pdo = new PDO('mysql:dbname=gamio5_gs_db;charset=utf8;host=mysql57.gamio5.sakura.ne.jp','gamio5','sS_3104_Ss');
  } catch (PDOException $e) {
	exit('DBConnectError:'.$e->getMessage());
  }
  
	// Localhost用：
	// new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');


  //２．SQL文を用意(データ取得：SELECT)
  $stmt = $pdo->prepare("SELECT * FROM gs_CU_table WHERE cname=$mname ");
  
  //3. 実行
  $status = $stmt->execute();
  


  //4．データ表示
  $view="";
  $evalsum =0;
  $count=0;
  $evalave=0;
  if($status==false) {
	  //execute（SQL実行時にエラーがある場合）
	$error = $stmt->errorInfo();
	exit("ErrorQuery:".$error[2]);
  
  }else{
	//Selectデータの数だけ自動でループしてくれる
	//FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
	while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	    $evalsum += $result['eval'];
		$count++;
		$view .="<tr><td class='tableborder3'>".$result['date']."</td><td class='tableborder3'>".$result['title']."</td><td class='tableborder3'>".$result['cont']."</td><td class='tableborder3'>"."<div class='evalstar'><img class='evalstar' src='./img/eval".$result['eval'].".jpeg' alt=''></div></td></tr>";
	}
  }

$evalave=round($evalsum/$count,2);
 
?>

<body>
<h1 class="headerfont">MC CheerUP Result</h1>
<div class="center_read">
	<div class="read1"><?= $mnamestr ?>さんのCheerUP状況</div>
	<div ><img class="imgzone" src="./img/<?= $mname ?>.jpeg" alt=""></div>
	<div class="read2">Average：<?= $evalave ?></div>
	<div class="read1">最近のCheerUPコメント</div>
	<table class="tableborder">
		<tr class="tableborder3">
			<th class="tableborder3">日付</th>
			<th class="tableborder3">件名</th>
			<th class="tableborder3">内容</th>
			<th  class="tableborder3">CheerUPポイント</th>
			
		</tr>
		<?= $view ?>
	</table>
 
	<div><a href="index.php">ホーム</a></div>

</div>

</body>
</html>
