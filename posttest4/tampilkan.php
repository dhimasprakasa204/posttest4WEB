<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CANAIKU</title>
    <link rel="icon" href="canaiku.png">
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/d6e78495c8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="header">
        <div class="toggle"> <!--Untuk latar belakang-->    
            <div class="circle"></div> <!--Icon lingkaran-->    
            <div class="toggle-moon"><i class="fas fa-moon"></i></div> <!--Icon bulan-->    
            <div class="toggle-sun"><i class="fas fa-sun"></i></div> <!--Icon matahari-->
        </div>
        <div class="logo-utama"><img src="canaiku.png" alt="logocanai" height="80px" width="80px"></div>
        <div class="header-logo">CANAIKU</div>
        <div class="header-list">
            <ul>
                <li><a href="menu.html" style="text-decoration:none ;">Daftar Menu</a></li>
                <li><a href="contact.php" style="text-decoration: none;">Hubungi Kami</a></li>
                <li><a href="about.html" style="text-decoration:none ;">Tentang</a></li>
                <li><a href="index.html" style="text-decoration: none;">Utama</a></li>
            </ul>
        </div>

    </div>


    <div class="main"> <br>
        <div class="main-tampilkan">
            <?php
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $telepon = $_POST['telepon'];
                    $jenis = $_POST['jenis'];
                    $pesan = $_POST['pesan'];

                    echo "<ul>";
                    echo "<li>Nama            : $nama</li>";
                    echo "<li>Email           : $email</li>";
                    echo "<li>No Telepon      : $telepon</li>";
                    echo "<li>Jenis Kelamin   : $jenis</li>";
                    echo "<li>Pesan           : $pesan</li>";
                }
            ?>
        </div>
    </div>

    <div class="footer">
        <div class="logo-utama"><img src="canaiku.png" alt="logocanai" height="80px" width="80px" style="padding-top: 20px;"></div>
        <div class="footer-logo">CANAIKU</div>
        <div class="footer-list">
            <ul>
                <li>Tentang</li>
                <li>Karier</li>
                <li>Alamat Cabang</li>
                <li>Hubungi Kami</li>
            </ul>
        </div>

    <script src="script.js"></script>

</body>
</html>