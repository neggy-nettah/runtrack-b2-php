<?php
function my_str_reverse(string $string): string{
    $reversed = '';
    $index = 0;

    // trouve le dernier caractere de la chaine
    while (isset($string[$index])) {
        $index++;
    }

    // inverse la chaine de caractère
    while ($index > 0) {
        $index--;
        $reversed .= $string[$index];
    }

    return $reversed;
}

?>