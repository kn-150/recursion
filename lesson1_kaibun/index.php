<?php

function isPalindromeInteger(int $n): bool
{
  $n = (string)$n; //文字列に変換
  $match = true; //文字が合致しているかどうか判断する真偽値
  $nLength = strlen($n) - 1;

  for ($i = 0; $i < strlen($n); $i++) {
    if ($n[$i] !== $n[$nLength - $i]) $match = false; //先頭部と後頭部が合致していなければfalseを代入
  }

  return $match;
}

// isPalindromeInteger(12222);
// isPalindromeInteger(12321);
// isPalindromeInteger(22782);
// isPalindromeInteger(189981);
// isPalindromeInteger(1);
// isPalindromeInteger(987823);
