<?php
$host = "sql213.infinityfree.com";
$user = "if0_41834406";
$password = "dmXMBRUeQlC";
$database = "if0_41834406_discover_saudi";
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
