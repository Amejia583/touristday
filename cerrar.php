<?php
session_start();
session_destroy();

echo "<script>alert('Cerrando sesión');</script>";
echo "<script>window.location='index.php';</script>";


?>
