<?php

if (isset($_POST["submit"]) ) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stok'];
    $distributor = $_POST['distributor'];
    $ekspor = $_POST['ekspor'];

    $ijinEdar = $_POST['ijinEdar'];
    $ijinBpom = $_POST['ijinBpom'];

    if ( $ekspor == "boleh" ) {
        $eksporText = "Boleh diEkspor";
    }
    else {
        $eksporText = "Tidak Boleh diEkspor";
    }

    if ( $ijinEdar == true ) {
        $ijinEdarStatus = "Berijin Edar";
    }
    else {
        $ijinEdarStatus = "Belum Berijin Edar";
    }

    if ( $ijinBpom == true ) {
        $ijinBpomStatus = "Berijin BPOM";
    }
    else {
        $ijinBpomStatus = "Belum Berijin BPOM";
    }
}




?>













<html>

    <head>

         <title>hasil form</title>

    </head>



    <body>

        <table border="1">
            <tr>
                <td>Id Barang</td>
                <td>:</td>
                <td><php echo $_POST['id_barang'] ?></td>
            </tr>

            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><php echo $_POST['nama_barang'] ?></td>
            </tr>

            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><php echo $_POST['jenis'] ?></td>
            </tr>

            <tr>
                <td>Satuan</td>
                <td>:</td>
                <td><php echo $_POST['satuan'] ?></td>
            </tr>

            <tr>
                <td>Stok Barang</td>
                <td>:</td>
                <td><php echo $_POST['stok'] ?></td>
            </tr>

            <tr>
                <td>Ijin Pendukung</td>
                <td>:</td>
                <td><php echo $_POST['check1'] ?></td>
                <td><php echo $_POST['check2'] ?></td>
            </tr>

            <tr>
                <td>Status Ekspor</td>
                <td>:</td>
                <td><php echo $_POST['boleh'] ?></td>
            </tr>

            

            


    </body>

</html>