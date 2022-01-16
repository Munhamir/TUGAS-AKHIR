<!DOCTYPE html>
<html>
    <head>
        <title>HamirPedia : Pengunjung</title>
        <link rel="stylesheet" type="text/css" href="all_css.css">
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
            <a name="atas"></a>
            <h1><a href="beranda.html"><img src="images/logo Hamir Pedia.jpeg" style="float: left; margin-left: 20px; width: 140px;"></a>HamirPedia<img src="images/transparan.png" style="float: right; margin-right: 20px; width: 100px;"></h1>
            <h3>Solusi Kebutuhan Elektronik Anda!</h3>
            <header>
        <nav>
            <ul>
                <li><a href="beranda.html">Beranda</a></li>
                <li><a href="katalog_produk.html">Katalog Produk</a></li>
                <li><a href="#">Pengunjung</a></li>
                <li><a href="tentang.html">Tentang</a></li>
            </ul>
        </nav>
        <article>
            <h2>Pengunjung (Buku Tamu)</h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ini merupakan tautan untuk Anda berinteraksi dengan Kami dengan memberikan saran, kritik, serta survey kepuasan Anda. Survey yang Anda berikan nanti akan dihitung sebagai tanda kehadiran Anda sebagai pelanggan AreIsPedia. Dengan survey ini, harapannya Kami mengetahui tentang apa yang menjadi keinginan pelanggan dan tentunya mengembangkan AreIsPedia menjadi lebih baik lagi.</p>
            <form style="border: 3px solid black; padding: 6px; background: rgba(0, 0, 0, 0.4);" action="#" method="POST" onsubmit="validasi()">
                <font color="yellow">*</font>Nama Lengkap: <br>
                <input type="text" name="nama_lengkap" size="45" id="nama_lengkap"><br><br>
                <font color="yellow">*</font>Jenis Kelamin: <br>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option selected="select">===Pilih===</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <br><br>
                <font color="yellow">*</font>Alamat: <br>
                <input type="text" name="alamat" size="45" id="alamat"><br><br>
                <font color="yellow">*</font>Email: <br>
                <input type="text" name="email" size="45" id="email"><br><br>
                <font color="yellow">*</font>Mengetahui Web ini dari: <br>
                <select name="info" id="info">
                    <option selected="select">===Pilih===</option>
                    <option value="iklan">Iklan</option>
                    <option value="surat kabar">Surat Kabar</option>
                    <option value="teman">Teman</option>
                    <option value="browsing">Browsing</option>
                </select>
                <br><br>
                <font color="greenyellow">**</font>Sosial Media Aktif Saat Ini: <br>
                <input type="checkbox" name="instagram" value="Ya"> Instagram
                <input type="checkbox" name="facebook" value="Ya"> Facebook
                <input type="checkbox" name="whatsapp" value="Ya"> Whatsapp
                <input type="checkbox" name="twitter" value="Ya"> Twitter
                <br><br>
                <font color="greenyellow">**</font>Menurut pendapat Anda, bagaimana tingkat pelayanan Kami sejauh ini?<br><br>
                Sangat Mengecewakan <input type="radio" name="puas1"> <input type="radio" name="puas2"> <input type="radio" name="puas3"> <input type="radio" name="puas4"> <input type="radio" name="puas5"> Sangat Memuaskan
                <p style="margin-left: 171px;">1&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5</p>
                <font color="greenyellow">**</font>Menurut pendapat Anda, bagaimana kondisi barang yang Anda pesan setelah sampai?<br><br>
                Sangat Rusak <input type="radio" name="kondisi1"> <input type="radio" name="kondisi2"> <input type="radio" name="kondisi3"> <input type="radio" name="kondisi4"> <input type="radio" name="kondisi5"> Sangat Bagus
                <p style="margin-left: 106px;">1&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5</p>
                <font color="greenyellow">**</font>Menurut pendapat Anda, seberapa inginkah Anda untuk membagikan AreIsPedia ke orang-orang?<br><br>
                Sangat Tidak Ingin <input type="radio" name="bagi1"> <input type="radio" name="bagi2"> <input type="radio" name="bagi3"> <input type="radio" name="bagi4"> <input type="radio" name="bagi5"> Sangat Ingin
                <p style="margin-left: 138px;">1&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5</p>
                <font color="greenyellow">**</font>Pesan: <br>
                <textarea name="pesan" cols="45" rows="4"></textarea>
                <br><br>
                <font color="yellow"><i>*wajib diisi</i></font><br>
                <font color="greenyellow"><i>**opsional, abaikan jika Anda adalah pengunjung baru</i></font>
                <br><br>
                <input type="submit" value="Kirim">
                <input type="reset" value="Batal">
            </form>
            <script type="text/javascript">
                function validasi(){
                    var nama = document.getElementById("nama_lengkap").value;
                    var jk = document.getElementById("jenis_kelamin").value;
                    var alamat = document.getElementById("alamat").value;
                    var email = document.getElementById("email").value;
                    var info = document.getElementById("info").value;
                    console.log(nama);
                    console.log(jk);
                    console.log(alamat);
                    console.log(email);
                    console.log(info);
                    var a1 = "Ada data wajib yang belum terisi, mohon periksa:";
                    if(nama == ""){
                        a1 = a1 + "\n-Nama Lengkap";
                        console.log("Tidak ada nama");
                    }
                    if(jk == "===Pilih==="){
                        a1 = a1 + "\n-Jenis Kelamin";
                        console.log("Tidak ada jenis kelamin");
                    }
                    if(alamat == ""){
                        a1 = a1 + "\n-Alamat";
                        console.log("Tidak ada alamat");
                    }
                    if(email == ""){
                        a1 = a1 + "\n-Email";
                        console.log("Tidak ada email");
                    }
                    if(info == "===Pilih==="){
                        a1 = a1 + "\n-Mengetahui Web Ini Dari";
                        console.log("Tidak ada info tahu web ini");
                    }
                    if(a1 == "Ada data wajib yang belum terisi, mohon periksa:"){
                        console.log("Data Anda lengkap");
                        alert("Terima kasih, data Anda lengkap. Selamat berbelanja di AreIsPedia!");
                    }else{
                        alert(a1);
                    }
                }
            </script>
            <?php
                if(isset($_POST["nama_lengkap"]) && $_POST["nama_lengkap"] != "" && isset($_POST["jenis_kelamin"]) && $_POST["jenis_kelamin"] != "===Pilih===" && isset($_POST["alamat"]) && $_POST["alamat"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["info"]) && $_POST["info"] != "===Pilih==="){
                    echo("<br>Hasil Survey:<br><br>");
                    echo("Nama Lengkap: ".$_POST["nama_lengkap"]);
                    echo("<br>Jenis Kelamin: ".$_POST["jenis_kelamin"]);
                    echo("<br>Alamat: ".$_POST["alamat"]);
                    echo("<br>Email: ".$_POST["email"]);
                    echo("<br>Mengetahui Dari: ".$_POST["info"]);
                }
            ?>
        </article>
        <footer>
            <p><img src="images/transparan.png" style="float: left; margin-left: 15px; width: 30px;">Copyright &copy; Munhamir @2021<a href="#atas"><img src="images/back-to-top-icon-png-7.png" style="float: right; margin-right: 15px; width: 30px;"></a></p>
        </footer>
    </body>
</html>