<?php

class user{
    public $nama;
    public $umur;
    public $kelas;
    public $is_active;
}
// inisialisasi class objek
$user = new user();
// memberikan nilai setiap attributnya
$user -> nama = "arief";
$user -> umur = 16;
$user -> kelas = "XII RPL";
// tampilkan semua attribute yang di miliki.
echo "nama;". $user->nama.'<br>';
echo "nama;". $user->umur.'<br>';
echo "nama;". $user->kelas.'<br>';