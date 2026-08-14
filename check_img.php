<?php
$i = 0;
foreach (glob('image/catalog/giyim/drive-june/*.jpg') as $f) {
    $s = getimagesize($f);
    echo basename($f) . ': ' . $s[0] . 'x' . $s[1] . PHP_EOL;
    if (++$i >= 5) break;
}
echo "---\n";
$i = 0;
foreach (glob('image/cache/catalog/giyim/drive-june/*-cover.*') as $f) {
    $s = getimagesize($f);
    echo basename($f) . ': ' . $s[0] . 'x' . $s[1] . PHP_EOL;
    if (++$i >= 5) break;
}
