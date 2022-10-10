<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMBAKO MASJAYA</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="formscript.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/ikon.ico">
</head>
<body>
    <header class="head">
        <nav>
            <div class="header-logo img">
                <img src="image/logo-header.png" alt=""/>
            </div>
            <div class="header-nav">
                <ul>
                    <li> <a href="index.php"> Home </a></li>
                    <li> <a href="form.php"> Input Barang </a></li>
                    <li> <a href="AboutMe.php">About Me</a> </li>
                    <li> <a href="VisitMe.php">Visit Me?</a> </li>
                    <li> <label>
                        <input type="checkbox" class="checkbox" id="tombol">
                        <span class="check"></span>
                    </label></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="phpnya">
            <div class="echoes">
                <?php 
                $pt = $_POST['pt'];
                echo "Nama Perusahaan     : ".$pt."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $nomorhp = $_POST['nomorhp'];
                echo "Nomor Perusahaan    : ".$nomorhp."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $merek = $_POST['merek'];
                echo "Merek Produk        : ".$merek."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $berat = $_POST['berat'];
                echo "Berat Barang        : ".$berat."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $jenis = $_POST['jenis'];
                echo "Jenis Produk       : ".$jenis."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $gambar = $_POST['gambar'];
                echo "Contoh Gambar       : ".$gambar."<br>"; 
                ?>
            </div>
        </div>

    <footer class="foot">
        <h4> About Me </h4>
        <p> Saya Jerry Fitriansyah seorang mahasiswa informatika angkatan 2021 yang bukan wibu,<br/>
            sedang belajar pemrograman web walau kebanyakan nonton tutorial</p>
        <div class="icon">
            <i class="fa fa-whatsapp"> 0858-8308-9058 </i>
            <i class="fa fa-instagram"> erry.fth </i>
            <i class="fa fa-envelope-o"> jryfitri@gmail.com </i>
        </div>
        <p> @Copyright 2022 - jerryfitriansyah - Made with HTML - CSS - Javascript </p>
    </footer>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("mode-gelap");
        }
    </script>
</body>
</html>