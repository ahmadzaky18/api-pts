<?php
$con = mysqli_connect("localhost","root","","dbrentsepeda");

$sql = "SELECT * FROM tbuser";
$json["STATUS"] = array();
$json["MESSAGE"] = array();
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($result) {
  $json["STATUS"] = "SUCCESS";
  $json["MESSAGE"] = "SUCCESS";
  if ($count > 0) {
    $json["LOAD"]["DATA"] = [];
    while ($row = mysqli_fetch_array($result)) {
      $array["ID"] = $row['id'];
      $array["EMAIL"] = $row['email'];
      $array["NAMA"] = $row['nama'];
      $array["NOHP"] = $row['nohp'];
      $array["ALAMAT"] = $row['alamat'];
      $array["NOKTP"] = $row['noktp'];
      if ($row["roleuser"] == 1) {
        $array["ROLE"] = "customer";
      } elseif ($row["roleuser"] == 2) {
        $array["ROLE"] = "admin";
      }
      array_push($json["LOAD"]["DATA"], $array);
    }
  } else {
    $json["LOAD"]["DATA"] = "null";
  }
} else {
  $json["STATUS"] = "FAILED";
  $json["MESSAGE"] = mysqli_error($con);
}

echo json_encode($json);
mysqli_close($con);
