<?php
$ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'asort($ar_buah)';
asort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';

echo 'ksort($ar_buah)';
ksort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';

echo 'arsort($ar_buah)';
arsort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';

echo 'krsort($ar_buah)';
krsort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';

$ar_buah2 = ["Pepaya","Apel","Mangga","Jambu"];

echo 'sort($ar_buah)';
sort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah2 as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';

echo 'rsort($ar_buah)';
rsort( array: $ar_buah);

echo '<ol>';
foreach ($ar_buah2 as $k => $v) {
    echo "<li>$k - $v;";
}
echo '</ol>';
