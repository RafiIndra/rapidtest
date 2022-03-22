<?php
require_once 'model/Peserta.php';

if(adaPermintaanProsesTambah()){
    $peserta = new Peserta($_POST['email'],$_POST['nama']);
    $peserta->add();
    $pesan = "Peserta berhasil ditambah.";
    kirimKeHalamanUtama($pesan);
} else {
    tampilkanFormulirTambahPeserta();
}

function adaPermintaanProsesTambah(){
    if(isset($_POST['email']) && isset($_POST['nama'])){
        return true;
    } else return false;
}

function tampilkanFormulirTambahPeserta(){
    require_once 'view/view-tambah-peserta.html';
}

function kirimKeHalamanUtama($pesan){
    header("Location: /rapidtest/indeks.php?pesan=$pesan");
}

