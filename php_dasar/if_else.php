<?php 
$teman = "andi";
if($teman == "andi"){
	echo "dia adalah teman saya";
}else{
	echo "dia bukan teman saya";
}
echo "<br>";

$teman = "andi";
if($teman == "Budi"){
	echo "dia adalah teman saya";
}else{
	echo "dia bukan teman saya";
}
echo "<br>";


$teman = "andi";
if($teman == "Budi"){
	echo "Budi adalah teman saya";
}elseif($teman == "andi"){
	echo "Andi adalah teman saya";
}else{
	echo "Saya tidak punya teman";
}
?>