<?php

namespace MukhametaliKussaiynov\OtusComposerPackage;

class PalindromeChecker
{

    public function isPalindrome(string $string): bool
    {
        $cleanedString = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));

        return $cleanedString === strrev($cleanedString);
    }

}
