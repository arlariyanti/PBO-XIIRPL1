<?php

require('../kelas/class_perhitungan.php');

// Object adalah instance dari class. Jika class secara umum mepresentasikan (template) 
// sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.
//instansiasi class persegi
$persegi_panjang = new perhitungan();

//memanggil method luas dari class persegi
echo $persegi_panjang->luasPersegiPanjang(10,7);

?>