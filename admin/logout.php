<?php

session_start();

session_destroy();

echo "<script>alert('Logout successfully');window.location='../user1/home.php';</script>";



?>