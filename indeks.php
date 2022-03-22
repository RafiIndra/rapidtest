<?php
require_once 'model/Peserta.php';

if(adaPesan()){
    $pesan = $_GET['pesan'];
} else $pesan = "";

$daftarPeserta = peserta::getAll();
tampilkanHalamanIndeks($pesan,$daftarPeserta);

function adaPesan(){
    if(isset($_GET['pesan'])){
        return true;
    } else return false;
}

function tampilkanHalamanIndeks($pesan,$daftarPeserta){
    require_once 'view/view-indeks.php';
}