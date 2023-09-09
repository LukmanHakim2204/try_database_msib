<?php

include_once("conection.php");

$id = $_GET['id'];

$delete = mysqli_query($mysqli, "DELETE FROM customer WHERE id='$id'");

header("Location:index.php");
