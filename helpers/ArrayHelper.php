<?php

namespace Helpers;

class ArrayHelper
{
    /**
     * This method groups files by their owners.
     *
     * @param array $filesAndOwners An associative array where the key is the file name and the value is the owner's name. 
     * Example: ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"]
     *
     * @return array Returns a sorted array where the keys are the owners' names and the values are arrays of file names.
     */
    public static function groupByOwners(array $filesAndOwners, array $extensions = ['txt', 'py'])
    {
        $arr = [];
        foreach ($filesAndOwners as $file => $owner) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($ext, $extensions)) {
                if (!isset($arr[$owner])) {
                    $arr[$owner] = [];
                }
                $arr[$owner][] = $file;
            }
        }

        ksort($arr);
        return $arr;
    }
}
