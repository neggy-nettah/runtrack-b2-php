<?php

function my_str_search(string $haystack, string $needle): int {
    $count = 0;
    $length = 0;

    while (isset($haystack[$index])) {
        if ($haystack[$index] === $needle) {
            $count++;
        }
        $index++;
    }

    return $count;
}

?>