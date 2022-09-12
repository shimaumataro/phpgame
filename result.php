<?php
//コンフィグ削除
$aitemark=$_POST["aitemark"];
$aitenumber=$_POST["aitenumber"];
$jibunmark=$_POST["jibunmark"];
$jibunnumber=$_POST["jibunnumber"];
$highlow=$_POST["highlow"];
?>
<h1>high&lowゲーム</h1>
相手のカード：
<?php echo $aitemark.$aitenumber ?>

<br>
<?php echo $highlow?>
を選択しました。
<br>
自分のカード：
<?php echo $jibunmark.$jibunnumber ?>
<br>
<?php
if($aitenumber>$jibunnumber){
$result = "low";//自分のカードが小さい場合
}
elseif($aitenumber<$jibunnumber){
$result = "high";//自分のカードが大きい場合
}
else{
$result = $highlow;//自分のカードと相手のカードが同じ数字    
}

if($highlow===$result){
echo 'あなたの勝ちです';
}
else{
    echo 'あなたの負けです';
}
?>
<br>
<a href="select.php">もう一度遊ぶ</a>
