<?php

require_once __DIR__ . DIRECTORY_SEPARATOR  . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo chr(10);
echo "\033[0m" . "Parser e pilhas:" . "\033[0m" . chr(10);
echo 'Input:
Se passarmos 7+2-3, a resposta deverá ser 6
Se passarmos (7+2)-3, a resposta deverá ser 6
Se passarmos (7-(3+2)), a resposta deverá ser 2
Se passarmos (7+2))-3, a resposta deverá ser \'false\'' . chr(10) . chr(10);

echo 'Result:' . chr(10);
// echo 'Test 1: ' . \Helpers\EquationHelper::calcExpression('7+2-3') . chr(10);
echo 'Test 2: ' . \Helpers\EquationHelper::calcExpression('(7+2)-3') . chr(10);
// echo 'Test 3: ' . \Helpers\EquationHelper::calcExpression('(7-(3+2))') . chr(10);
// echo 'Test 4: ' . \Helpers\EquationHelper::calcExpression('(7+2))-3') . chr(10) . chr(10);
