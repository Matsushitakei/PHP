<?php
$str = "<h1>strip_tags関数とは</h1>"
. "<h2>「文字列からタグを取り除く」</h2>";
echo strip_tags($str);
?>

<?php
$animals = ["dog","cat","rabbit"];
//array_pushは配列の要素を追加
array_push($animals,"tiger","horse");

print_r($animals)
?>

<?php
$dogs1 = ['dog1','dog2'];
$dogs2 = ['dog3','dog4'];
$dogs3 = ['dog5','dog6'];

//配列を結合
$dog_merge = array_merge($dogs1,$dogs2,$dogs3);

print_r($dog_merge);
?>
