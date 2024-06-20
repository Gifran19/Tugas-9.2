<!DOCTYPE html>
<html>
<head>
    <title>Comparison Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #00aeff;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Comparison Results</h1>
        <form method="post">
            <div class="form-group">
                <label for="a">Variable a:</label>
                <input type="text" id="a" name="a" required>
            </div>
            <div class="form-group">
                <label for="b">Variable b:</label>
                <input type="text" id="b" name="b" required>
            </div>
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values of $a and $b from the form
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            // Perform comparisons based on user input
            $results = [
                "$a == $b" => $a == $b ? 'true' : 'false',
                "$a != $b" => $a != $b ? 'true' : 'false',
                "$a > $b" => $a > $b ? 'true' : 'false',
                "$a < $b" => $a < $b ? 'true' : 'false',
                "($a != $b) && ($a > $b)" => ($a != $b) && ($a > $b) ? 'true' : 'false',
                "($a != $b) || ($a > $b)" => ($a != $b) || ($a > $b) ? 'true' : 'false'
            ];

            // Display results in a table
            echo "<h2>Results:</h2>";
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            echo "<tr><th>Expression</th><th>Result</th></tr>";
            foreach ($results as $expression => $result) {
                echo "<tr><td>$expression</td><td>$result</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
