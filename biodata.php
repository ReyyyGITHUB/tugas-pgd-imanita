<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nama_lengkap = "Raditya Rayhan";
$nama_panggilan = "Rayhan";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 05;
$bulan_lahir = 01;
$tahun_lahir = 2010;
$alamat = "Jl. Dewi Sartika III No. 28, Semarang";
$gender = "Laki Laki";
$kewarganegaraan = "WNI";
$no_wa = "085799799857";
$email = "rayhanyogiswara133@gmail.com";
$motto_hidup = "ikan hiu makan tomat, semangat";
$foto = "rehan.jpeg";

$tahun_sekarang = date('Y');
$umur = $tahun_sekarang - $tahun_lahir;

$tahun_depan = $tahun_sekarang + 10;
$umur_tahun_depan = $umur + 10;

$hobi1 = 'berenang';
$hobi2 = 'ngoding';
$hobi3 = 'makan';

$makanan1 = 'MBG';
$makanan2 = 'snack mbg';
$minuman1 = 'air putih';
$minuman2 = 'jus jeruk';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biodata.css">
    <title>Biodatanya: <?php echo $nama_panggilan; ?></title>
</head>

<body>
    <div class="profile">
        <h1>Hello, <?php echo $nama_panggilan; ?></h1>

    </div>

    <p>kata kata hari ini:</p>
    <marquee direction="right"><?php echo $motto_hidup; ?></marquee>

    <section id="tentang">
        <div class="informasi">
            <h2>Informasi Pribadi</h2>
            <p>Nama Lengkap: <?php echo $nama_lengkap; ?></p>
            <p>Agama: <?php echo $agama; ?></p>
            <p>Tempat, Tanggal Lahir:
                <?php echo $tempat_lahir . ", " . $tanggal_lahir . "-" . $bulan_lahir . "-" . $tahun_lahir; ?>
            </p>
            <p>Umur: <?php echo $umur; ?> tahun</p>
            <p>Alamat: <?php echo $alamat; ?></p>
            <p>Gender: <?php echo $gender; ?></p>
            <p>Kewarganegaraan: <?php echo $kewarganegaraan; ?></p>
            <p>Nomor WA: <?php echo $no_wa; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>

        <div class="keinginan">
            <h2>Keinginan 10 Tahun Lagi</h2>
            <p>
                Hai namaku <?php echo $nama_panggilan; ?>, saat ini tahun <?php echo $tahun_sekarang; ?>,
                aku adalah pelajar yang berumur <?php echo $umur; ?> tahun.
                10 tahun lagi di tahun <?php echo $tahun_depan; ?>, di umur <?php echo $umur_tahun_depan; ?>
                aku adalah seorang Software Engineer. Aku ingin bekerja di perusahaan gede,
                usaha yang akan saya lakukan adalah belajar progarmming sedini mungkin.
            </p>
            <img class="profile-pict" src="<?php echo $foto; ?>" alt="Foto Profil">
        </div>
    </section>


    <section id="container-2">
        <div class="skills">
            <h2>Skills</h2>
            <p>HTML & CSS: <progress value="20" max="100"></progress></p>
            <p>PHP:<br /> <progress value="5" max="100"></progress></p>
        </div>

        <div class="hobi">
            <h2>Hobi</h2>
            <ol>
                <li><?php echo $hobi1; ?></li>
                <li><?php echo $hobi2; ?></li>
                <li><?php echo $hobi3; ?></li>
            </ol>
        </div>

        <div class="makanan">
            <h2>Makanan Favorit</h2>
            <ul type="square">
                <li><?php echo $makanan1; ?></li>
                <li><?php echo $makanan2; ?></li>
            </ul>

        </div>

        <div class="minuman">

            <h2>Minuman Favorit</h2>
            <ol type="A">
                <li><?php echo $minuman1; ?></li>
                <li><?php echo $minuman2; ?></li>
            </ol>
        </div>

        <div class="riwayat">

            <h2>Riwayat Pendidikan</h2>
            <table border="2">
                <tr>
                    <th>Tingkat Pendidikan</th>
                    <th>Nama Sekolah</th>
                    <th>Tahun Mulai</th>
                    <th>Tahun Lulus</th>
                </tr>
                <tr>
                    <td>SD</td>
                    <td>SDN Sampangan 02</td>
                    <td>2016</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>SMP</td>
                    <td>SMPN 13 Semarang</td>
                    <td>2022</td>
                    <td>2025</td>
                </tr>
                <tr>
                    <td>SMK</td>
                    <td>SMKN 8 Semarang</td>
                    <td>2025</td>
                    <td>Sekarang</td>
                </tr>
            </table>
        </div>
    </section>


    <br>
    <div class="container-button">
        <button class="btn-primary" id="btn-primary">
            <a href="jadwal.php">Lihat Jadwal Pelajaran & Piket -></a>
        </button>
    </div>

</body>

<script src="script.js"></script>

</html>
