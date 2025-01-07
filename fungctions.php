<?php
// functions.php

// Fungsi untuk menambah data ke tabel
function tambahData($nama_komik, $tgl_rilis, $rating, $deskripsi, $studio, $chapter, $gambar) {
    global $koneksi;
    $query = "INSERT INTO wiki (nama_komik, tgl_rilis, rating, deskripsi, studio, chapter, gambar) VALUES ('$nama_komik', '$tgl_rilis', '$rating', '$deskripsi', '$studio', '$chapter', '$gambar')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengedit data dalam tabel
function editData($id, $nama_komik, $tgl_rilis, $rating, $deskripsi, $studio, $chapter, $gambar) {
    global $koneksi;
    $query = "UPDATE wiki SET nama_komik='$nama_komik', tgl_rilis='$tgl_rilis', rating='$rating', deskripsi='$deskripsi', studio='$studio', chapter='$chapter', gambar='$gambar' WHERE id=$id";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data dari tabel
function hapusData($id) {
    global $koneksi;
    $query = "DELETE FROM wiki WHERE id=$id";
    mysqli_query($koneksi, $query);
}
?>
