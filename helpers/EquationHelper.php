<?php

namespace Helpers;

class EquationHelper
{
    public static function calcExpression($exp)
    {
        $exp = trim($exp);
        $exp = str_replace(' ', '', $exp);
        if (!preg_match("/^[\d+\-\(\) ]+$/", $exp)) {
            return 'false';
        }

        $equation = [];
        $idx = -1;
        $size = strlen($exp);
        $operation = null;
        $base = 0;
        $total = 0;
        for ($i = 0; $i < $size; $i++) {
            $char = $exp[$i];
            if ($char == ' ') {
                continue;
            }

            switch ($char) {
                case '(':
                    $idx++;
                    $equation[$idx] = 0;
                    break;
                case ')':
                    if (!isset($equation[$idx]) || !is_null($operation)) {
                        return 'false';
                    }
                    $idx--;
                    break;
                case '+':
                    $operation = '+';
                    break;
                case '-':
                    $operation = '-';
                    break;
                default:
                    if (!is_numeric($char)) {
                        return 'false';
                    }
                    if (isset($equation[$idx])) {
                        if ($operation == '+') {
                            $equation[$idx] += $char;
                            $operation = null;
                        } else if ($operation == '-') {
                            $equation[$idx] -= $char;
                            $operation = null;
                        } else {
                            $equation[$idx] = $char;
                        }
                        continue;
                    }

                    if ($operation == '+') {
                        $base += $char;
                        $operation = null;
                    } else if ($operation == '-') {
                        $base -= $char;
                        $operation = null;
                    } else {
                        $base = $char;
                    }
            }
        }

        var_dump($equation);

        return $total + $base;
    }
}
