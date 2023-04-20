<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>

<p>轉換描述</p>

<ul>
    <li><span style="color:red;">公元年分除以4可整除，為閏年。</span></li>
    <li>
        公元年分除以4可整除但除以100不可整除，為閏年。
        <div></div>
        <div></div>
        <div></div>
    </li>
    <li><span style="color:red;">公元年分除以400可整除但除以100不可整除，為閏年。</span></li>
</ul>

<?php

$year = 2100;
if ($year % 4 == 0) {
    echo $year . "是閏年";
} else {
    echo $year . "not閏年";
}
echo "<hr>";
// 
if (($year % 4 == 0) && ($year % 100 != 0)) {
    // if( $year % 100 !=0){
    // }

    echo $year . "是閏年";
} else {
    echo $year . "not閏年";
}
echo "<hr>";
// 
if (($year % 4 == 0) && ($year % 100 != 0)) {
  

    echo $year . "是閏年";
} else {
    echo $year . "not閏年";
}







?>