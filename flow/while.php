<?php
echo '<div style="display: flex; flex-wrap: wrap;  flex-basis: 50vw; width: 50vw; background-color: lightblue;">';
echo '<div style="border: 1px solid black; margin: 5px;padding: 5px;">';

$i=0;
while($i<10){
    echo $i*10;
    echo "<br>";
    $i++;
}
echo '$i='.$i;

echo "<hr>";
$i=0;
do{
    echo $i*10;
    echo "<br>";
    $i++;  

}while($i<10);
echo '$i='.$i;

echo "</div>";

echo '<div style="border: 1px solid black; margin: 5px; padding: 5px;">';





echo "</div>";
echo "</div>";
?>
<div class="1" style="background-color: lightblue;"></div>