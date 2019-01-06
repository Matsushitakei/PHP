<?php
function multiply($arr) { //3.仮引数$arrには$aが適用される
  $result = 1; //4.結果には1を代入
  foreach($arr as $value){ //5.$arrから要素を一つずつ取り出し、一時変数$valueへ代入
    $result *= $value; //6.$valueの要素は順に掛けられて$resultへ代入される
  }
  return $result; //7.multiply内の処理の結果を返す
}
$a = array(1,3,5,7,9); //1.配列を$aに代入
echo multiply($a); //2.引数に$aを指定         8.最終結果がターミナルに表示される
?>
