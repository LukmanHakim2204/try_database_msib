<?php
include('conection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <h2>Edit Customer</h2>
        <a href="index.php" class="btn btn-primary">Kembali ke Data Customer</a>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM customer WHERE id = $id";
            $result = $mysqli->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
            } else {
                echo "Kontak tidak ditemukan.";
                exit();
            }
        }
        ?>

        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="kode_customer" class="form-control" value="<?php echo $row['kode_customer']; ?>" required>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nomor Telepon:</label>
                <input type="text" name="no_hp" class="form-control" value="<?php echo $row['no_hp']; ?>" required>
            </div>
            <div class="form-group">
                <label>Tempat Tinggal:</label>
                <input type="text" name="tempat_tinggal" class="form-control" value="<?php echo $row['tempat_tinggal']; ?>" required>
            </div>
            <div class="form-group">
                <label>Umur:</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $row['umur']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $kode_customer = $_POST['kode_customer'];
            $nama = $_POST['nama'];
            $no_hp = $_POST['no_hp'];
            $tempat_tinggal = $_POST['tempat_tinggal'];
            $umur = $_POST['umur'];

            $sql = "UPDATE customer SET kode_customer='$kode_customer', nama='$nama', no_hp='$no_hp', tempat_tinggal='$tempat_tinggal', umur='$umur' WHERE id=$id";
            if ($mysqli->query($sql) === TRUE) {
                header('Location: index.php');
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        }
        ?>
    </div>
</body>

</html>