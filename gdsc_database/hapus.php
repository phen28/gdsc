<?php
if ($_GET['nomor']) {
    include 'koneksi.php';
    $nomor = $_GET['nomor'];

    $query = "DELETE FROM siswa WHERE nomor = '$nomor'";
    $execQuery = mysqli_query($conn, $query);
    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil dihapus');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal dihapus');
        window.location.href = 'index.php';
        </script>";
    }
} else {
    echo "Tidak ada nomor induk siswa";
}