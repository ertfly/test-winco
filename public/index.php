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

</body>

</html>