<?php
include 'koneksi.php';

$sql = "INSERT INTO mahasiswa (nama, prodi) VALUES ('Rinasti Ramadona', 'MI 2B')";
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
