<?php
function max_array($arr){

  $max_number = $arr[0];// とりあえず配列の最初の要素を一番大きい値とする
  foreach($arr as $a){ //$arrから一つずつ要素を取り出し、$aに代入
    //if文を使用。もしも$aの要素内にmax_numberよりも大きい値があれば、その値を代入させる
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number; //max_arrayの処理結果を返す
}
$b = array(1,3,5,7,9);
echo max_array($b);
?>
