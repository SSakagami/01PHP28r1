<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート入力</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="./css/sample.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Shippori+Antique&display=swap" rel="stylesheet">
</head>



<body>
    <h1 class="headerfont">MC CheerUP Form</h1>
    <form method="post" action="write.php">
      <div class="center">
      <table class="center tableborder">
        <tr>
          <th class="tableborder1">氏名：</th>
          <td class="tableborder2"><p>
          <select class="children box" name="name">
                <option value="" selected='selected'>選択</option>
                <option value="1" data-val="1">孫悟空</option>
                <option value="2" data-val="1">孫悟飯</option>
                <option value="3" data-val="1">孫悟天</option>
                <option value="4" data-val="2">ベジータ</option>
                <option value="5" data-val="2">トランクス</option>
                <option value="6" data-val="3">ピッコロ</option>
                <option value="7" data-val="3">ヤムチャ</option>
                <option value="8" data-val="3">クリリン</option>
                <option value="9" data-val="4">天津飯</option>
                <option value="10" data-val="4">チャオズ</option>
                <option value="11" data-val="4">亀仙人</option>
                <option value="12" data-val="5">牛魔王</option>
                <option value="13" data-val="5">ブゥ</option>
                <option value="14" data-val="5">ビーデル</option>
                <option value="15" data-val="5">パン</option>
            </select>
          </p></td>
        </tr>
        <tr>
          <th class="tableborder1">依頼先：</th>
          <td class="tableborder2"><p>
          <select class="parent box"  name="client_dep" id="">
                <option value="" selected='selected'>部署を選択</option>
                <option value="1">電力DX推進室</option>
                <option value="2">MCリテールエナジー</option>
                <option value="3">国内水事業チーム</option>
                <option value="4">欧州電力サービスチーム</option>
                <option value="5">オフグリッドチーム</option>
            </select>
          </p></td>
        </tr>        
        <tr>
          <th class="tableborder1">依頼先氏名：</th>
          <td class="tableborder2"><p>
          <select class="children box" name="client_name">
                <option value="" selected='selected'>依頼先を選択</option>
                <option value="1" data-val="1">孫悟空さん</option>
                <option value="2" data-val="1">孫悟飯さん</option>
                <option value="3" data-val="1">孫悟天さん</option>
                <option value="4" data-val="2">ベジータさん</option>
                <option value="5" data-val="2">トランクスさん</option>
                <option value="6" data-val="3">ピッコロさん</option>
                <option value="7" data-val="3">ヤムチャさん</option>
                <option value="8" data-val="3">クリリンさん</option>
                <option value="9" data-val="4">天津飯さん</option>
                <option value="10" data-val="4">チャオズさん</option>
                <option value="11" data-val="4">亀仙人さん</option>
                <option value="12" data-val="5">牛魔王さん</option>
                <option value="13" data-val="5">ブゥさん</option>
                <option value="14" data-val="5">ビーデルさん</option>
                <option value="15" data-val="5">パンさん</option>
            </select>
          </p></td>
        </tr>        
        <tr>
          <th class="tableborder1"> お願いした日付：</th>
          <td class="tableborder2"><p><input class="box" type="date" name="date" size="20"></p></td>
        </tr>        
        <tr>
          <th class="tableborder1">お願いした件名：</th>
          <td class="tableborder2"><p><input class="box" type="text" name="title" size="20"></p></td>
        </tr> 
        <tr>
          <th class="tableborder1">お願いした内容：</th>
          <td class="tableborder2"><p><textarea  name="content" id="" cols="40" rows="3"></textarea></p></td>
        </tr>         
        <tr>
          <th class="tableborder1">評価：</th>
          <td class="tableborder2"><p>
          <select class="box"  name="evaluation" id="">
                <option value="" selected='selected'>評価を選択</option>
                <option value="1">1.話を聞けた/聞かせてくれた</option>
                <option value="2">2.参考になった</option>
                <option value="3">3.刺激となるアイデアがあった</option>
                <option value="4">4.今後も意見交換を継続したい</option>
                <option value="5">5.ビジネスとして積極的に推進したい</option>
            </select>
          </p></td>
        </tr>        
      </table>

      <p class="center1"><input class="buttonbox" type="submit" value="送信"></p>
      </div>
    </form>







<!-- 

        <p>氏名：
        <select class="children" name="name">
                <option value="" selected='selected'>選択</option>
                <option value="1" data-val="1">孫悟空</option>
                <option value="2" data-val="1">孫悟飯</option>
                <option value="3" data-val="1">孫悟天</option>
                <option value="4" data-val="2">ベジータ</option>
                <option value="5" data-val="2">トランクス</option>
                <option value="6" data-val="3">ピッコロ</option>
                <option value="7" data-val="3">ヤムチャ</option>
                <option value="8" data-val="3">クリリン</option>
                <option value="9" data-val="4">天津飯</option>
                <option value="10" data-val="4">チャオズ</option>
                <option value="11" data-val="4">亀仙人</option>
                <option value="12" data-val="5">牛魔王</option>
                <option value="13" data-val="5">ブゥ</option>
                <option value="14" data-val="5">ビーデル</option>
                <option value="15" data-val="5">パン</option>
            </select>
        </p>
        <p>依頼先：
            <select class="parent" name="client_dep" id="">
                <option value="" selected='selected'>部署を選択</option>
                <option value="1">電力DX推進室</option>
                <option value="2">MCリテールエナジー</option>
                <option value="3">国内水事業チーム</option>
                <option value="4">欧州電力サービスチーム</option>
                <option value="5">オフグリッドチーム</option>
            </select>
        </p>
        <p>依頼先氏名：
            <select class="children" name="client_name">
                <option value="" selected='selected'>依頼先を選択</option>
                <option value="1" data-val="1">孫悟空さん</option>
                <option value="2" data-val="1">孫悟飯さん</option>
                <option value="3" data-val="1">孫悟天さん</option>
                <option value="4" data-val="2">ベジータさん</option>
                <option value="5" data-val="2">トランクスさん</option>
                <option value="6" data-val="3">ピッコロさん</option>
                <option value="7" data-val="3">ヤムチャさん</option>
                <option value="8" data-val="3">クリリンさん</option>
                <option value="9" data-val="4">天津飯さん</option>
                <option value="10" data-val="4">チャオズさん</option>
                <option value="11" data-val="4">亀仙人さん</option>
                <option value="12" data-val="5">牛魔王さん</option>
                <option value="13" data-val="5">ブゥさん</option>
                <option value="14" data-val="5">ビーデルさん</option>
                <option value="15" data-val="5">パンさん</option>
            </select>
        </p>
        <p>お願いした日付：<input type="date" name="date" size="20"></p>    
        <p>お願いした件名：<input type="text" name="title" size="20"></p>
        <p>お願いした内容：<input type="text" name="content" size="20"></p>
        <p>評価：<input type="text" name="evaluation" size="20"></p>
        <p><input type="submit" value="送信"></p>
    </form> -->

    <ul>
    <li><a href="index.php">ホーム</a></li>
  </ul>
</body>

<!-- <script>
    var $children = $('.children');
var original = $children.html();

$('.parent').change(function() {

  var val1 = $(this).val();

  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val');
    if (val1 != val2) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr('disabled');
  }

});
</script> -->
</html>