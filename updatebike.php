<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        require('database.php');

        // if (!isset($_POST['id']) || !isset($_POST['email']) || !isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['address']) || !isset($_POST['noktp'])) {
        //     die(json_encode([
        //         "status" => "error",
        //         "message" => "parameter kurang lengkap"
        //     ]));
        // }
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $merk = $_POST['merk'];
        $jenis= $_POST['jenis'];
        $warna = $_POST['warna'];
        $hargasewa = $_POST['hargasewa'];

        // if(isset($_FILES['image'])) {
        //           $name = $_FILES['image']['name'];
        //           $path = $_FILES['image']['tmp_name'];
        //           $size = $_FILES['image']['size'];
        //           $format = $_FILES['image']['type'];
        //           $error = $_FILES['image']['error'];

        $sql = "UPDATE tbbike SET kode = '$kode', warna = '$warna', jenis = '$jenis', hargasewa = '$hargasewa', merk = '$merk' WHERE id = '$id'";

        if ($mysqli->query($sql)) {
            echo json_encode([
                "status" => "success",
                "message" => "update berhasil"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => $mysqli->error
            ]);
        }
        // else {
        //     echo json_encode([
        //         "status" => "error",
        //         "message" => "tidak ditemukan"
        //     ]);
        // }

        $mysqli->close();
    }
?>
