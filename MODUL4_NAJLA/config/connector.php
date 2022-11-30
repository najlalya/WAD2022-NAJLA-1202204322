<?php
  $connector = new mysqli("localhost:3315", "root", "", "modul4");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}