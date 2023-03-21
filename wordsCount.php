<?php

$text = "apple banana orange apple";

$wordsCount = array();
$word = "";
for ($i = 0; $i < strlen($text); $i++) {
    $char = strtolower($text[$i]);
    if (ctype_alpha($char)) {
        $word .= $char;
    } elseif ($word != "") {
        if (!isset($wordsCount[$word])) {
            $wordsCount[$word] = 1;
        } else {
            $wordsCount[$word]++;
        }
        $word = "";
    }
}
if ($word != "") {
    if (!isset($wordsCount[$word])) {
        $wordsCount[$word] = 1;
    } else {
        $wordsCount[$word]++;
    }
}
foreach ($wordsCount as $word => $count) {
    echo "$word: $count\n";
}
