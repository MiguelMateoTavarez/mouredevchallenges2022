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
    $firstWord = str_split( strtolower( trim($firstWord) ) );
    $secondWord = str_split( strtolower( trim($secondWord ) ) );

    foreach ($firstWord as $letter) {
        (array_search($letter, $secondWord) == '' ? $search_result = 'vacio' : $search_result = 'lleno').PHP_EOL;

        if($search_result == 'vacio') {
            return false;
        }
    }

    return true;
}

echo isAnagram('Castor ', 'castro').PHP_EOL;