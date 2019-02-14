<?php 
$nama = $_POST['nama'];

if($nama == ""){
	header("location:form_validation.php?nama=kosong");
}else{
	echo "Nama anda adalah". $nama;
}
?>