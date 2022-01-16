<!DOCTYPE html>
<html>
    <head>
        <title>HamirPedia : Konfirmasi Pembelian</title>
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
                <li><a href="pengunjung.html">Pengunjung</a></li>
                <li><a href="tentang.html">Tentang</a></li>
            </ul>
        </nav>
        <article>
            <div>
                <div style="display: inline;">
                    <form style="border: 3px solid black; padding: 6px; background: rgba(0, 0, 0, 0.4); max-width: 350px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET" onsubmit="validasi()">
                        <font color="yellow">*</font>Nama Lengkap: <br>
                        <input type="text" name="nama_lengkap" size="45" id="nama_lengkap"><br><br>
                        <font color="yellow">*</font>Alamat: <br>
                        <input type="text" name="alamat" size="45" id="alamat"><br><br>
                        <font color="yellow">*</font>Email: <br>
                        <input type="text" name="email" size="45" id="email"><br><br>
                        Nama Barang: <br>
                        <input type="text" name="fname" size="45" id="fname" value="<?php echo $_GET["fname"]?>" readonly><br><br>
                        Harga Barang: <br>
                        <input type="text" name="fprice" size="45" id="fprice" value="<?php echo $_GET["fprice"]?>" readonly><br><br>
                        <font color="yellow">*</font>Jumlah: <br>
                        <input type="text" name="fquantity" size="45" id="fquantity"><br><br>
                        <input type="submit" value="Beli">
                        <input type="reset" value="Batal">
                    </form>
                    <script type="text/javascript">
                        function validasi(){
                            var nama = document.getElementById("nama_lengkap").value;
                            var alamat = document.getElementById("alamat").value;
                            var email = document.getElementById("email").value;
                            var nambar = document.getElementById("fname").value;
                            var jumlah = document.getElementById("fquantity").value;
                            var harga = document.getElementById("fprice").value * jumlah;
                            console.log(nama);
                            console.log(alamat);
                            console.log(email);
                            console.log(jumlah);
                            console.log(harga);
                            var a1 = "Ada data wajib yang belum terisi, mohon periksa:";
                            if(nama == ""){
                                a1 = a1 + "\n-Nama Lengkap";
                                console.log("Tidak ada nama");
                            }
                            if(alamat == ""){
                                a1 = a1 + "\n-Alamat";
                                console.log("Tidak ada alamat");
                            }
                            if(email == ""){
                                a1 = a1 + "\n-Email";
                                console.log("Tidak ada email");
                            }
                            if(jumlah == ""){
                                a1 = a1 + "\n-Jumlah";
                                console.log("Tidak ada jumlah");
                            }
                            if(a1 == "Ada data wajib yang belum terisi, mohon periksa:"){
                                console.log("Data Anda lengkap");
                                a1 = "Nama Lengkap: " + nama + "\n" +
                                "Alamat: " + alamat + "\n" +
                                "Email: " + email + "\n" +
                                "Nama Barang: " + nambar + "\n" +
                                "Jumlah: " + jumlah + "\n" +
                                "Total harga: " + harga + "\n" +
                                "Waktu dan Tanggal Pembelian: " + new Date() + "\n" +
                                "Pin Pembayaran: " + Math.floor((Math.random() * 9999999999) + 999999999) + "\n"
                                alert(a1)
                            }else{
                                alert(a1);
                            }
                        }
                    </script>
                </div>
                <div>
                </div>
            </div>
        </article>
        <footer>
            <p><img src="images/transparan.png" style="float: left; margin-left: 15px; width: 30px;">Copyright &copy; Munhamir @2021<a href="#atas"><img src="images/back-to-top-icon-png-7.png" style="float: right; margin-right: 15px; width: 30px;"></a></p>
        </footer>
    </body>
</html>