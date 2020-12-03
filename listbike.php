<?php
    require('database.php');

    $sql = "SELECT * FROM tbbike";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $bike = array();
        while ($row = $result->fetch_assoc()) {
            array_push($bike , $row);
        }

        echo json_encode([
            "status" => "success",
            "result" => $bike
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "tidak ditemukan"
        ]);
    }

    $mysqli->close();
?>
