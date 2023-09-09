<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Customer</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Data Customer</h2>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="kode_customer">Kode Customer:</label>
                <input type="text" class="form-control" id="kode_customer" name="kode_customer" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomer Handphone:</label>
                <input type="no_hp" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="tempat_tinggal">Tempat Tinggal:</label>
                <input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" id="umur" name="umur" required>
            </div>
            <button type="submit" name="Submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $kode_customer = $_POST['kode_customer'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $tempat_tinggal = $_POST['tempat_tinggal'];
        $umur = $_POST['umur'];
        // Memanggil koneksi menuju database
        include_once("conection.php");

        // Query untuk insert data ke database
        $result = mysqli_query(
            $mysqli,
            "INSERT INTO customer (kode_customer, nama, no_hp, tempat_tinggal, umur) VALUES ('$kode_customer', '$nama', '$no_hp', '$tempat_tinggal', '$umur')"
        );

        echo "Berhasil menambah user. <a href='index.php'>Lihat User</a>";
    }
    ?>
</body>

</html>