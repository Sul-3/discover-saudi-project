<?php
include "../includes/admin_auth.php";
include "../includes/db.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: dashboard.php");
    exit();
}

$id = intval($_GET["id"]);

$stmt = mysqli_prepare($conn, "DELETE FROM regions WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: dashboard.php?msg=deleted");
exit();
?>
