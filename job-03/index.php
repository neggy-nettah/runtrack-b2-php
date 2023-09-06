<?php

function my_is_multiple(int $divider, int $multiple): bool {
    $remainder = $multiple; 
    while ($remainder >= $divider) {
        $remainder -= $divider;
    }

    return $remainder === 0;
}

?>
