<?php
$email = $_POST['email'];
$password = $_POST['password'];
$nama= $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$noktp = $_POST['noktp'];
$roleuser = $_POST['roleuser'];
$con = mysqli_connect("localhost","root","","dbrentsepeda");
$sql = "insert into tbuser (email,password,nama,nohp,alamat,noktp,roleuser) values ('$email','$password','$nama','$nohp','$alamat','$noktp','$roleuser')";
$json["hasil"]=array();
// $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $count = mysqli_num_rows($result);
if($con->query($sql) === TRUE) {
  $json["hasil"]["respon"]=true;
}else {
  $json["hasil"]["respon"]=false;
}
echo json_encode($json);

?>
