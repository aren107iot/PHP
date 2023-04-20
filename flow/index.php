<?php

$score = 60;

if ($score >= 60) {
  echo '成績=' . $score;
  echo '<br>';
  echo '及格';
} else {
  echo '成績=' . $score;
  echo '<br>';
  echo '不及格';
}
echo '<hr>';

echo '放榜結果:<br>';
$level = '';
switch ($level) {
  case "C":
    echo '你得到C level';
    break;
  case "D":
    echo '你得到D level';
    break;
  case "F":
    echo '你得到F level';
    break;
  default:
    echo '你缺席考試';
}
echo '<hr>';
$if_level;
$if_score = -111;
echo "你的成績為:" . $if_score . "<br>";
if ($if_score <= 60) {
  $if_level = "F";
} else if ($if_score <= 80) {
  $if_level = "C";
} else {
  $if_level = "A";
}
echo "成績等級為:" . $if_level;
echo "<br>評語:";
switch ($if_level) {
  case "A":
    echo '優秀';
    break;
  case "C":
    echo '尚可';
    break;
  case "F":
    echo '不及格';
    break;
  default:
    echo '你缺席考試';
}
echo "<hr>";