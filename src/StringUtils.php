<?php

namespace StringUtils;

function capitalize($text): string
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
