<style>
    * {
        /* 設定全域字形全形 */
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h3>直角三角形</h3>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < ($i + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<h3>倒直角三角形</h3>";
// for ($i = 4; $i >= 0; $i--) {
//     for ($j = 0; $j < ($i + 1); $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (5 - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h3>正三角形</h3>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp";
    }
    for ($j = 0; $j < ($i * 2  + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<?php
// for ($i = 4; $i >= 0; $i--) {
//     for ($j = 0; $j < ($i + 1); $j++) {
//         echo "&nbsp";
//     }
//     for ($j = 0; $j < ($i + 1); $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
?>
<h3>菱形一 巢狀</h3>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp";
    }
    for ($j = 0; $j < ($i * 2  + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo "&nbsp";
    }
    for ($j = 0; $j < ((3 - $i) * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h3>菱形二 </h3>
<?php
$tmp = 0;
for ($i = 0; $i < 9; $i++) {

    if ($i < 5) {
        $tmp = $i;
    } else {
        $tmp = 8 - $i;
    }
    // $tmp=($i<5)?$i:8-$i;

    for ($j = 0; $j < (4 - $tmp); $j++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < ($tmp * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h3>矩形</h3>
<?php
$n = 13;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $i == ($n - 1)) {
            echo "*";
        } else if ($j == 0 || $j == $n - 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<h3>矩形對角線</h3>
<?php
$n = 9;
for ($i = 0; $i < $n; $i++) {

    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $i == ($n - 1)) {
            echo "*";
        } else if ($j == 0 || $j == $n - 1 || $i == $j || $i == $n - 1 - $j) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }

    echo "<br>";
}
?>
