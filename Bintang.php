<!DOCTYPE html>
<html lang="id">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <title>Segitiga Sama Sisi</title>
</head>
<body>
    <form method="POST">
      <label for="tinggi">Tinggi:</label>
      <input type="number" id="tinggi" name="tinggi" min="1" >
      <button type="submit">Tampilkan</button>
  </form>
  <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = intval($_POST['tinggi']);

    for ($baris = 1; $baris <= $tinggi; $baris++) {
        // Buat sejumlah spasi
        for ($i = 1; $i <= $tinggi - $baris; $i++) {
        echo " ";
        }
        // Tampilkan *
    for ($j = 1; $j <= 2 * $baris - 1; $j++) {
        echo "*";
        }
        // Pindah baris
        echo "\n";
    }
}
?>
    </pre>
</body>
</html>