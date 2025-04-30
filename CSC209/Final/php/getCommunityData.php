<?php
$path = '../outputFinal/community.json';

if (!file_exists($path)) {
    echo json_encode([]);
    exit;
}

$posts = json_decode(file_get_contents($path), true);
echo json_encode($posts);
?>
