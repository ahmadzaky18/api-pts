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
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $noktp = $_POST['noktp'];

        $sql = "UPDATE tbuser SET nama='$nama', email='$email', nohp='$nohp', alamat='$alamat', noktp='$noktp'  WHERE id = '$id'";

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

        $mysqli->close();
    }
?>
