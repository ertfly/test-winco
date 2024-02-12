<?php

require_once __DIR__ . DIRECTORY_SEPARATOR  . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo chr(10);
echo "\033[0m" . "Arquitetura de objetos:" . "\033[0m" . chr(10);
echo 'Input:
$table = new LeagueTable(array(\'Mike\', \'Chris\', \'Arnold\'));
$table->recordResult(\'Mike\', 2);
$table->recordResult(\'Mike\', 3);
$table->recordResult(\'Arnold\', 5);
$table->recordResult(\'Chris\', 5);
echo $table->playerRank(1);' . chr(10) . chr(10);

echo 'Result:' . chr(10);
$table = new Helpers\LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1).chr(10) . chr(10);
