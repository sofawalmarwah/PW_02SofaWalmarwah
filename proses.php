<?php
$penghubung = mysqli_connect("localhost", "root", "", "akademik_univ");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama_mahasisw = $_POST["nama_mahasiswa"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $telpon = $_POST["telpon"];
    $agama = $_POST["agama"];

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mahasiswa (nama_mahasiswa, nim, jenis_kelamin, alamat, telpon, agama) VALUES ('$nama_mahasisw', '$nim', '$jenis_kelamin', '$alamat', '$telpon', '$agama')";

    if (mysqli_query($penghubung, $query)) {
        // Data berhasil disimpan, arahkan kembali ke halaman formulir
        header("Location: index.php");
        exit;
    } else {
        // Kesalahan saat menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($penghubung);
    }
}
?>

