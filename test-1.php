<?php

require_once __DIR__ . DIRECTORY_SEPARATOR  . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo chr(10);
echo "\033[0m" . "Implement a groupByOwners function that:" . "\033[0m" . chr(10);
echo 'Input:' . chr(10);
echo json_encode(['Input.txt' => 'Randy', 'Code.py' => 'Stan', 'Output.txt' => 'Randy'], JSON_PRETTY_PRINT) . chr(10) . chr(10);
echo 'Result:' . chr(10);
echo json_encode(\Helpers\ArrayHelper::groupByOwners(['Input.txt' => 'Randy', 'Code.py' => 'Stan', 'Output.txt' => 'Randy']), JSON_PRETTY_PRINT) . chr(10) . chr(10);
