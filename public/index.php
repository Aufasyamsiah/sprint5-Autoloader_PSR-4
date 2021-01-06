<?php
 require '../vendor/autoload.php';

 use App\Controllers\Lingkaran;

 use App\Controllers\Persegi;

 use App\Controllers\Segitiga;


?>


<!DOCTYPE html>
<html>
<head>
<title>Bangun Datar</title>
</head>
<body>
<h1>PSR-4</h1>



<h2>Lingkaran</h2>
<form action="" method="post">
<table>
<tr><td>Jari - Jari <input type="text" name="jari"></td></tr>
<tr><td>Luas <input type="text" name="luas"></td></tr>
<tr><td><input type="submit" name=""></td></tr>
</table>
</form>
<?php
$Lingkaran = new Lingkaran;
 $Lingkaran->Bangunan1();
?>


<h2>Persegi</h2>
<form action="" method="post">
<table>
<tr><td>sisi <input type="text" name="sisi"></td></tr>
<tr><td>sisi <input type="text" name="sisi"></td></tr>
<tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>  

<?php
$Persegi = new Persegi;
 $Persegi->Bangunan2();
?>


<h2>Segitiga</h2>
<form action="" method="post">
<table>
<tr><td>Alas <input type="text" name="alas"></td></tr>
  <tr><td>Tinggi <input type="text" name="tinggi"></td></tr>
  <tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>

<?php
$Segitiga = new Segitiga;
 $Segitiga->Bangunan3();
?>

</body>
</html>
