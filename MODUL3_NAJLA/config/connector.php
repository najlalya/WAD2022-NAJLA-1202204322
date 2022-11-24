<?php
$connector = new mysqli("localhost:8080", "root", "", "modul3");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}