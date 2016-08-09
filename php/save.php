<?php

$postJson = $_POST['content'];
$href = $_POST["href"];

$oldJson = file_get_contents("../data/".$href.".json", $content);
$oldArr = json_decode($oldJson, TRUE);

$newArr = json_decode($postJson, TRUE);
$titles = [];
foreach ($newArr as $item) {
    $titles[] = $item['name'];
}
foreach ($oldArr as $item) {
    if (!in_array($item['name'], $titles)) {
        $newArr[]  = $item;
    }
}

$content = json_encode($newArr);

$r = file_put_contents("../data/".$href.".json", $content);
$r = file_put_contents("../data/".$href."-".date("Y-m-d")."-".time().".json", $content);
    
