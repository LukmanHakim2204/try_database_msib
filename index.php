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
    <title>Data Customer</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Data Customer</h2>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Kontak</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Customer</th>
                    <th>Nama</th>
                    <th>Nomor Handphone</th>
                    <th>Tempat Tinggal</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM  customer";
                $result = $mysqli->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['kode_customer'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['no_hp'] . "</td>";
                        echo "<td>" . $row['tempat_tinggal'] . "</td>";
                        echo "<td>" . $row['umur'] . "</td>";
                        echo "<td>";
                        echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                        echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data kontak.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>