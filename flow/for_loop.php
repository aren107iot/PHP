<?php
echo '<div class="container" style="display: flex; flex-basis: 100vw;">';
echo '<div class="item" style="border: 1px solid black; margin: 5px;padding: 5px;">';

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
$limit = ceil($n / 2);
$limit = floor($n / 2);

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
