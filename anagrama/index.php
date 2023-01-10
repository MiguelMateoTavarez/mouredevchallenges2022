<?php

/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */


function isAnagram(string $firstWord, string $secondWord): bool
{
    if ($firstWord == $secondWord) {
        return false;
    }

    $firstWord = str_split(strtolower(trim($firstWord)));
    $secondWord = str_split(strtolower(trim($secondWord)));

    return (serialize(sort($firstWord)) === serialize(sort($secondWord)) ? true : false);

}

echo isAnagram('Castor', 'castro') . PHP_EOL;