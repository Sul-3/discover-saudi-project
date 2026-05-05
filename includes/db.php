<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "discover_saudi";
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("&#1601;&#1588;&#1604; &#1575;&#1604;&#1575;&#1578;&#1589;&#1575;&#1604; &#1576;&#1602;&#1575;&#1593;&#1583;&#1577; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578;: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>