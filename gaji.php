<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

echo "<table>";
echo "<tr><th>Deskripsi</th><th>Jumlah</th></tr>";
echo "<tr><td>Gaji sebelum kena pajak</td><td>Rp. " . number_format($gaji, 2, ',', '.') . "</td></tr>";
echo "<tr><td>Gaji setelah kena pajak</td><td>Rp. " . number_format($thp, 2, ',', '.') . "</td></tr>";
echo "</table>";
?>
