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

    <hr />
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

    <hr />
    <h4>Parser e pilhas</h4>

    <h5>Calculadora de 2 operações com parêntesis</h5>

    <p>Construa uma função calcula_expressao($exp) que implementa uma calculadora de 2 operações (+ e -) e que respeita o parêntesis.</p>
    <p>A função deve receber uma string e retornar o resultado. Caso a expressão esteja incorreta (faltando parêntesis, ou com caracteres inválidos), deve retornar 'false'.</p>
    <p>Notas: Para simplificar, a calculadora só aceita números inteiros de 1 dígito (0-9), operadores (- e +) e os parênteses "()". Pode haver vários níveis de parênteses.</p>
    <p>Além disso, não precisa se preocupar com sinal de '-' na frente do primeiro número da expressão ou na frente do primeiro número dentro de um parêntese).</p>

    <pre>
Se passarmos 7+2-3, a resposta deverá ser 6
Se passarmos (7+2)-3, a resposta deverá ser 6
Se passarmos (7-(3+2)), a resposta deverá ser 2
Se passarmos (7+2))-3, a resposta deverá ser 'false'
</pre>
    <h5 class="no-mp">Result:</h5>
    <pre><?php
    echo 'Test 1: '.\Helpers\EquationHelper::calcExpression('7+2-3').chr(10);
    echo 'Test 2: '.\Helpers\EquationHelper::calcExpression('(7+2)-3').chr(10);
    echo 'Test 3: '.\Helpers\EquationHelper::calcExpression('(7-(3+2))').chr(10);
    echo 'Test 4: '.\Helpers\EquationHelper::calcExpression('(7+2))-3').chr(10);
    ?></pre>
    <br /><br /><br /><br />
</body>

</html>