<?php
$filename = "a4_toread.txt";

if (!file_exists($filename)) {
    echo "File not found: $filename";
    exit;
}

$lines = file($filename);

if (empty($lines)) {
    echo "File is empty!";
    exit;
}

foreach ($lines as $line) {
    echo htmlspecialchars($line) . "<br>";
}
?>
