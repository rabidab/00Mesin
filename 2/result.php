<html>
<body>
ini jalan kagak?<br>
<?php

?>
<br>
<br><a href="index.php"><b>Kembali</b></a></td>

</body>
</html>
<!--
/* ===========
// 4.52 Tunjangan yang dipotong
$kata1 = $_POST["input1"];
$pecah1 = explode(" ", $kata1);
$gaji = $pecah1[0];
$pajak = (100-$pecah1[1])/100;

$tambahan = 0;
$tambahan = ($gaji/$pajak) - $gaji;
echo "$tambahan<br>";

$bulat = explode(".", $tambahan);
echo $bulat[0]+1;

/* ===========
// 4.13 jam lembur
$kata1 = $_POST["input1"];
$pecah1 = explode(" ", $kata1);
$lama = $pecah1[1]-$pecah1[0];
$lembur = $lama-8;
$jam = 0;
if ($lama > 8) { 
  if ($lembur > 2) { // kalo lemburnya 3 jam = 8 + 3 + lembur
    $jam = 11 + ($lembur * 3);
  } elseif ($lembur > 1) { //kalo 2 jam = 8 + 1 + 2
    $jam = 11;
  } else { // kalo 1 jam = 8 + 1
    $jam = 9;
  }
} else {
  # code...
  $jam = $lama;
}

/* ===========
// 4.22 Ember
$kata1 = $_POST["input1"];
$pecah1 = explode(" ", $kata1);
$jumlah = 0;
for ($i=0; $i < count($pecah1) ; $i++) { 
  # code...
  $jumlah = $jumlah + $pecah1[$i];
}
$hasil = 0;
$hasil = $jumlah/count($pecah1);
?>

/* ==========
// 4.32 palindrom number

$kata1 = $_POST["input1"];
$pecah1 = explode(" ", $kata1);
$j = $pecah1[0]; //nilai terkecil
$k = $pecah1[1]; //nilai terbesar
$arr = array();
$banyak = 0;
for ($nilai=$j; $nilai <= $k; $nilai++) { 
  $arr[] = "$nilai"; //deret baris dan aray didapat.
}
for ($a=0; $a < count($arr) ; $a++) { 
  //echo "$arr[$a]";
  $angka = $arr[$a];
  echo "$angka";
  if ($angka == strrev($angka)) {
    $banyak++;
    echo " benar<br>";
  } else {
    $banyak=$banyak;
    echo " salah<br>";
  }
}
*/

/* ==========
//4.28 (banding 2 array sama tidak - intersect )

$kata1 = $_POST["input1"];
$kata2 = $_POST["input2"];
$pecah1 = explode(" ", $kata1);
$pecah2 = explode(" ", $kata2);

$result = (array_intersect($pecah1, $pecah2));
//echo (count($result));

$x=0;
for ($i=0; $i < count($pecah1); $i++) { 
  for ($j=0; $j < count($pecah2) ; $j++) { 
    if ($pecah1[$i]==$pecah2[$j]) {
      $x++;
      echo "jumlah $x <br>";
    } else {
      //echo "gak ada yang sama";
    }
  }
}
*/

/* ========= 
// ini soal 4.3

$pizza = $_POST["input"];
$pieces = explode(" ", $pizza);

for($i=0; $i < count($pieces); $i++) {
  //echo "$pieces[$i] <br>";
  echo strrev($pieces[$i])." ";
}
*/

/* ========= 
// ini soal 4.0
$x=1;
while($x<=100) {
  if ($x%3 == 0) {
    if ($x%5 == 0) {
      echo "$x Fizz Buzz<br>";
      $x++;
    } else {
      echo "$x Fizz <br>";
      $x++;
    }
  } elseif ($x%5 == 0) {
    echo "$x Buzz <br>";
    $x++;
  } else {
    echo "$x <br>";
    $x++;
  }
}
*/

/* ========== ini clue 4.1
// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
*/

-->