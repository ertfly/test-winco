<?php

namespace Helpers;

class EquationHelper
{
    public static function calcExpression($exp)
    {
        if (!preg_match("/^[\d+\-\(\) ]+$/", $exp)) {
            return 'false';
        }

        $totalOpenParamethesis = substr_count($exp, '(');
        $totalCloseParamethesis = substr_count($exp, ')');
        if($totalOpenParamethesis != $totalCloseParamethesis) {
            return 'false';
        }

        return eval('return ' . $exp . ';');
    }
}
