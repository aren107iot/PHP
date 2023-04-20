<?php
echo '<div class="container" style="display: flex; flex-basis: 100vw;">';
echo '<div class="item" style="border: 1px solid black; margin: 5px;padding: 5px;">';
// 從0數到9，每次$i+2
for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i * 10;
    echo "<br>";
}
echo '$i=' . $i;
// echo "<hr>";

echo "</div>";
echo '<div class="item" style="border: 1px solid black; margin: 5px; padding: 5px;">';
echo "1,3,5,7,9……n<hr>";

$n = 21;
// 無條件進位，取天花板
$limit = ceil($n / 2);
// 無條撿捨去
$limit = floor($n / 2);
// 1數到21/2(n=21)，10.5無條件進位
for ($i = 1; $i <= ceil($n / 2); $i++) {
    echo $i + 2;
    echo "<br>";
}

echo "</div>";
echo '<div class="item" style="border: 1px solid black; margin: 5px; padding: 5px;">';
echo "10,20,30,40,50,60……n<hr>";

for ($i = 0; $i < 10; $i = $i + 1) {
    echo $i * 10;
    echo "<br>";
}

echo "</div>";
echo '<div class="item" style="border: 1px solid black; margin: 5px; padding: 5px;">';
echo "質數計算<hr>";

$n=97;

for($i=3;$i<=97;$i++){
    $check=false;
    for($j=2;$j<$i;$j++){
    
        if($i%$j==0){
            $check=true;
            break;
        }
    }
    
    if($check==false){
        echo $i . ",";
    }
}




echo "</div>";
echo "</div>";
