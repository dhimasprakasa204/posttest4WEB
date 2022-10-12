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
        <div class="header-logo">HUBUNGI CANAIKU</div>
        <div class="header-list">
            <ul>
                <li><a href="menu.html" style="text-decoration:none ;">Daftar Menu</a></li>
                <li><a href="contact.php" style="text-decoration: none;">Hubungi Kami</a></li>
                <li><a href="about.html" style="text-decoration:none ;">Tentang</a></li>
                <li><a href="index.html" style="text-decoration: none;">Utama</a></li>
            </ul>
        </div>

    </div>

    <div class="main">
        <div class="copy-container">
            <h1>CANAIKU<span>.</span></h1>
            <h2>Aneka Olahan Roti Canai </h2>
        </div>


        <div class="contact-form">
        <form action="tampilkan.php" name="form" method="POST">
                <h3 id="section-title">Hubungi Kami</h3>
                <br>
                <p>Nama</p>
                <input type="text" name="nama" placeholder="Silahkan Masukkan Nama Anda" required>

                <p>Email (Wajib Diisi)</p>
                <input type="email" name="email" placeholder="Silahkan Masukkan Email Anda" required>

                <p>No Telepon</p>
                <input type="number" name="telepon" required>

                <p>Jenis Kelamin</p>
                <input type="radio" name="jenis" value="laki-laki">Laki-Laki <br>
                <input type="radio" name="jenis" value="perempuan">Perempuan <br>


                <p>Pesan (Wajib Diisi)</p>
                <textarea cols="25" rows="8" name="pesan"></textarea>


                <p>Silahkan Kirim jika anda sudah yakin dengan jawaban anda</p>
                <input type="submit" id="contact-submit" name="submit" value="Kirim">
                <script>
                    document.getElementById("contact-submit").addEventListener("click", function() {
                        alert("Masukkan Anda Sangat Berarti Bagi Kami :)");
                    });
                </script>             
            </form>

        </div>

    </div>

    <div class="footer">
        <div class="logo-utama"><img src="canaiku.png" alt="logocanai" height="80px" width="80px"></div>
        <div class="footer-logo">CANAIKU</div>
        <div class="footer-list">
            <ul>
                <li>Tentang</li>
                <li>Karier</li>
                <li>Alamat Cabang</li>
                <li>Hubungi Kami</li>
            </ul>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>