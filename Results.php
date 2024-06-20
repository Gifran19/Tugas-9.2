<?php
    $a = 5;
    $b = 4;
    
    $results = [
        "$a == $b" => $a == $b ? 'true' : 'false',
        "$a != $b" => $a != $b ? 'true' : 'false',
        "$a > $b" => $a > $b ? 'true' : 'false',
        "$a < $b" => $a < $b ? 'true' : 'false',
        "($a != $b) && ($a > $b)" => ($a != $b) && ($a > $b) ? 'true' : 'false',
        "($a != $b) || ($a > $b)" => ($a != $b) || ($a > $b) ? 'true' : 'false'
    ];

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Expression</th><th>Result</th></tr>";
    foreach ($results as $expression => $result) {
        echo "<tr><td>$expression</td><td>$result</td></tr>";
    }
    echo "</table>";
?>
