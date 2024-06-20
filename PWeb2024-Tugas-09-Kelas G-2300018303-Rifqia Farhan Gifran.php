<!DOCTYPE html>
<html>
<head>
    <title>Informasi Gaji</title>
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
        <h1>Informasi Gaji</h1>
        <?php include 'gaji.php'; ?>
    </div>
</body>
</html>
