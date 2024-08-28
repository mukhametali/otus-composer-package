<?php

namespace MukhametaliKussaiynov\PalindromeChecker;

class PalindromeChecker
{

    public function isPalindrome(string $string): bool
    {
        $cleanedString = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));

        return $cleanedString === strrev($cleanedString);
    }

}

// Пример использования
$checker = new PalindromeChecker();
$string = "A man, a plan, a canal, Panama";
echo $checker->isPalindrome($string) ? "Palindrome" : "Not a palindrome";
echo PHP_EOL;