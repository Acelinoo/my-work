<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    function getInput($key, $default = "Tidak diisi")
    {
        return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : $default;
    }

    // Collecting data from the GET request
    $nama = getInput("nama", "Nama tidak diisi");
    $gender = getInput("gender", "Jenis kelamin tidak dipilih");
    $hobi = isset($_GET["hobi"]) ? array_map('htmlspecialchars', $_GET["hobi"]) : [];
    $agama = getInput("agama", "Agama tidak dipilih");
    $asalSekolah = getInput("as", "Asal sekolah tidak diisi");
    $keterangan = getInput("keterangan", "Keterangan tidak diisi");
    ?>
    <div class="form-data">
        <h2>Data Mahasiswasss</h2>
        <ul>
            <li>Nama: <?php echo $nama; ?></li>
            <li>Jenis Kelamin: <?php echo $gender; ?></li>
            <li>Hobi: <?php echo !empty($hobi) ? implode(", ", $hobi) : "Tidak ada hobi yang dipilih"; ?></li>
            <li>Agama: <?php echo $agama; ?></li>
            <li>Asal Sekolah: <?php echo $asalSekolah; ?></li>
            <li>Keterangan: <?php echo $keterangan; ?></li>
        </ul>
    </div>

</body>

</html>