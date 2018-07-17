<html>
<head>
    <title>Laporan ::Fitria Afwiyatin Nihayah</title>
</head>
<body>
<h1>Laporan Penilaian Sifat Siswa</h1><hr>
<a href="print.php">Cetak Data</a><br><br>
<table border="1" cellpadding="8">
<tr>
    
    <th>Tingkat Kenakalan</th>
    <th>Tanggal</th>
    <th>NIS</th>
    <th>Keterangan</th>
</tr>
 
<?php
// Load file koneksi.php
include "koneksi.php";
 
$query = "SELECT * FROM penilaian"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['id_pelanggaran']."</td>";
        echo "<td>".$data['Tanggal']."</td>";
        echo "<td>".$data['NIS']."</td>";
        echo "<td>".$data['Keterangan']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
</body>
</html>