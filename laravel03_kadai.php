<?php
/*課題 1 */
$name = Kei;

if ($name = Kei) {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}


/*課題 2 */
$total = 0;
echo $total;

for ($i = 0 ; $i <= 10000 ; $i++) {
  $total += $i;
}
echo $total;


/*課題 3 */
$fruits = array("apple","mango","caju","orange","strawberry");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

/*課題 4*/
$start = 0;
$end = 100;

for ($i = $start ; $i <= $end; $i++) {

if($i % 5 == 0){
 echo $i;
}
}
?>
