<?php
include "./inc/koneksi.php";

$koneksi->query("DELETE FROM tb_pegawai WHERE nip='$_GET[id]'");

header("location:tampil.php");
?>