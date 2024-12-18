<?php
// Function to retrieve and sanitize input data
function getInput($key, $default = "Tidak diisi")
{
    return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : $default;
}

// Retrieve and sanitize input data
$nama = getInput("nama", "Nama tidak diisi");
$gender = getInput("gender", "Jenis kelamin tidak dipilih");
$hobi = isset($_GET["hobi"]) ? array_map('htmlspecialchars', $_GET["hobi"]) : []; // Sanitize each hobby
$agama = getInput("agama", "Agama tidak dipilih");
$asalSekolah = getInput("as", "Asal sekolah tidak diisi");
$keterangan = getInput("keterangan", "Keterangan tidak diisi");

// Display the output
echo "<h2>Data Mahasiswa</h2>";
echo "Nama Anda: $nama<br>";
echo "Jenis Kelamin: $gender<br>";

// Display hobbies as a list if available
echo "Hobi: ";
if (!empty($hobi)) {
    echo "<ul>";
    foreach ($hobi as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "Tidak ada hobi yang dipilih.<br>";
}

echo "Agama: $agama<br>";
echo "Asal Sekolah: $asalSekolah<br>";
echo "Keterangan: $keterangan<br>";