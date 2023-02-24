<?php
// mengambil data dari database
$html = $footer;

// mengkonversi karakter HTML yang dienkripsi kembali ke format HTML aslinya
$html = htmlspecialchars_decode($html);

// mengevaluasi string sebagai kode PHP untuk menjalankan sintaks blade
eval("?> $html <?php ");
?>
