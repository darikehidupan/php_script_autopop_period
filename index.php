<?php
$conn = mysqli_connect("localhost","root","","test") or die ("could not connect database");

/* = = = = = = PERIODE AUTO INSERT DIMULAI DAN BERAKHIR = = = = = = */

$tanggalperiodemulai = 27;
$tanggalperiodeselesai = 31;

/* = = = = = = INTERVAL / JEDA PER BERAPA HARI INSERTNYA = = = = = = */

$interval = 1;

for ($i=$tanggalperiodemulai; $i <= $tanggalperiodeselesai; $i++) 
{

	if ($i % $interval == 0)
	{
		$datepost[] = $i;
	}

}

print_r($datepost);

/* = = = = = = 
NAH DISINI AKTIVITAS INSERTNYA,
ALGONYA DIA NGAMBIL DARI TANGGAL SEKARANG HARI INI,
JIKA TANGGAL SEKARANG ADA YANG TERMASUK KE HITUNGAN DIATAS (ARRAY DATEPOST),
MAKA SCRIPTNYA KE EXECUTE,
= = = = = = = = */

date_default_timezone_set('Asia/Jakarta');
$date = date('m/d/Y h:i:s a', time());
$tanggalsekarang = date('d', time());

foreach ($datepost as $key => $value) 
{
	if ($value == $tanggalsekarang) 
	{
		$message = "Now is the time !!!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>