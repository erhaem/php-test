<?php

function findDuplicate(array $arr) {
    $cleanedArr = [];
    $dupVal = [];
    $dupCount = [];
    
    foreach($arr as $index => $value) {
        if (!in_array($value, $cleanedArr)) {
            $cleanedArr[] = $value;
        } else {
            $dupVal[] = $value;
            
            if (!isset($dupCount[$value])) {
                $dupCount[$value] = 0;
            }
            $dupCount[$value]++;
        }
    }
    
    return [
        "duplicate_values" => [
            "value" => $dupVal,
            "count" => $dupCount,
        ],
        "cleaned_array" => $cleanedArr
    ];
}

$a =  [
        "Morning", "Morning", "Morning",
        "Guys", "Guyz", "Guys",
        1, 2, 3, 4, 5,
    ];
print_r(findDuplicate($a));
