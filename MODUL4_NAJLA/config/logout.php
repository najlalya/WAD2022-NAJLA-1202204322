<?php
session_start();
session_destroy();
session_start();    
$_SESSION['success'] = "Berhasil logout";
                header("Location: ../Index-Najla.php", true, 301);
                exit();