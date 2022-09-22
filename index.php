<?php
include 'navbar.php';
session_start();

if (isset($_SESSION['username'])) {
    navbar1();
} else {
    navbar();
}






?>