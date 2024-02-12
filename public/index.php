<?php require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php') ?><html>

<head>
    <title>My Test Winco</title>
    <style>
        .no-mp {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <h4>Implement a groupByOwners function that:</h4>
    <ul>
        <li>Accepts an associative array containing the file owner name for each file name.</li>
        <li>Returns an associative array containing an array of file names for each owner name, in any order.</li>
    </ul>
    <h5 class="no-mp">Input:</h5>
    <pre><?= json_encode(['Input.txt' => 'Randy', 'Code.py' => 'Stan', 'Output.txt' => 'Randy'], JSON_PRETTY_PRINT) ?></pre>
    <h5 class="no-mp">Result:</h5>
    <pre><?= json_encode(\Helpers\ArrayHelper::groupByOwners(['Input.txt' => 'Randy', 'Code.py' => 'Stan', 'Output.txt' => 'Randy']), JSON_PRETTY_PRINT) ?></pre>

    <br /><br />
    <h4>Arquitetura de objetos</h4>
    <h5>Implementar a classe LeagueTable</h5>
    <p>The LeagueTable class tracks the score of each player in a league. After each game, the player records their score with the recordResult function.</p>
    <p>The player's rank in the league is calculated using the following logic:</p>
    <ul>
        <li>The player with the highest score is ranked first (rank 1). The player with the lowest score is ranked last.</li>
        <li>If two players are tied on score, then the player who has played the fewest games is ranked higher.</li>
        <li>If two players are tied on score and number of games played, then the player who was first in the list of players is ranked higher.</li>
    </ul>
    <p>Implement the playerRank function that returns the player at the given rank.</p>

    <h5 class="no-mp">Input:</h5>
<pre>
$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
</pre>
    <h5 class="no-mp">Result:</h5>
    <pre><?php 
        $table = new Helpers\LeagueTable(array('Mike', 'Chris', 'Arnold'));
        $table->recordResult('Mike', 2);
        $table->recordResult('Mike', 3);
        $table->recordResult('Arnold', 5);
        $table->recordResult('Chris', 5);
        echo $table->playerRank(1);
    ?></pre>


</body>

</html>