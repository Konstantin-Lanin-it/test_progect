<?php

$input_string = "apple banana orange apple";
$input_string = strtolower($input_string);
$input_string = preg_replace("/[^a-zA-Z0-9\s]/", "", $input_string);
$words_array = explode(" ", $input_string);
$word_counts = array();
foreach($words_array as $word) {
    if(array_key_exists($word, $word_counts)) {
        $word_counts[$word]++;
    } else {
        $word_counts[$word] = 1;
    }
}
foreach($word_counts as $word => $count) {
    echo "$word: $count\n";
}
