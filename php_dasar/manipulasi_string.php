<?php 
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat);
//hitung jumlah huruf dalam kalimat


$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);
//hitung jumlah kata dalam kalimat


$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);
//membalikan string kalimat


$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);
//mengganti kata dalam kalimat

?>