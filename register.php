<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        require('database.php');


        $email = $_POST['email'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $noktp = $_POST['noktp'];
        // $roleuser = $_POST['roleuser'];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tbuser (email, password, nama, nohp, alamat, noktp) VALUES ('$email', '$passwordHash', '$nama', '$nohp', '$alamat', '$noktp')";

        if ($mysqli->query($sql)) {
            echo json_encode([
                "status" => "success",
                "message" => "register berhasil"
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
