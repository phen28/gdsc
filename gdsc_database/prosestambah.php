<?php
if ($_POST) {
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    $query = "INSERT INTO siswa VALUES ('$nama', '$nomor', '$kelas', '$nilai')";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'tambah.php';
        </script>";
    }
} else {
    echo "No Access";
}
