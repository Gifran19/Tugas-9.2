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
        <form method="post">
            <div class="form-group">
                <label for="gaji">Gaji (Rp)</label>
                <input type="text" id="gaji" name="gaji" required>
            </div>
            <div class="form-group">
                <label for="pajak">Pajak (%)</label>
                <input type="text" id="pajak" name="pajak" required>
            </div>
            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $gaji = $_POST['gaji'];
            $pajak = $_POST['pajak'] / 100; // Convert percentage to decimal
            $thp = $gaji - ($gaji * $pajak);

            echo "<h2>Hasil Perhitungan:</h2>";
            echo "<table>";
            echo "<tr><th>Deskripsi</th><th>Jumlah</th></tr>";
            echo "<tr><td>Gaji sebelum kena pajak</td><td>Rp. " . number_format($gaji, 2, ',', '.') . "</td></tr>";
            echo "<tr><td>Gaji setelah kena pajak</td><td>Rp. " . number_format($thp, 2, ',', '.') . "</td></tr>";
            echo "</table>";
        }
        ?>
</body>
</html>
