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
        $base = null;
        $resultEquation = null;
        $backOperation = null;
        for ($i = 0; $i < $size; $i++) {
            $char = $exp[$i];
            if ($char == ' ') {
                continue;
            }

            switch ($char) {
                case '(':
                    $idx++;
                    $equation[$idx] = 0;
                    if (!is_null($operation)) {
                        $backOperation = $operation;
                        $operation = null;
                    }
                    break;
                case ')':
                    if (!isset($equation[$idx])) {
                        return 'false';
                    }
                    $resultEquation = $equation[$idx];
                    $idx--;
                    if (!is_null($backOperation)) {;
                        $operation = $backOperation;
                        $backOperation = null;
                        if ($idx > -1) {
                            if ($operation == '+') {
                                $equation[$idx] += $resultEquation;
                            } else if ($operation == '-') {
                                $equation[$idx] -= $resultEquation;
                            }
                            $operation = null;
                            unset($equation[$idx + 1]);
                        }
                    }
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
                        $add = is_null($resultEquation) ? $char : ($resultEquation + $char);
                        if (is_null($base)) {
                            $base = $add;
                        } else {
                            $base += $add;
                        }
                        $operation = null;
                        $resultEquation = null;
                    } else if ($operation == '-') {
                        $sub = is_null($resultEquation) ? $char : ($resultEquation - $char);
                        if (is_null($base)) {
                            $base = $sub;
                        } else {
                            $base -= $sub;
                        }
                        $operation = null;
                        $resultEquation = null;
                    } else {
                        $base = $char;
                    }
            }
        }

        return $base;
    }
}
