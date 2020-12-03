<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        require('database.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbuser WHERE email = '$email'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                echo json_encode([
                    "status" => "success",
                    "message" => "login berhasil",
                    "id" => $row['id']
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "email atau password tidak valid"
                ]);
            }
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "email atau password tidak valid"
            ]);
        }

        $mysqli->close();
    }
?>
