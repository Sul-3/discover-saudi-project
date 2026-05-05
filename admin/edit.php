<?php
include "../includes/admin_auth.php";
include "../includes/db.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: dashboard.php");
    exit();
}

$id = intval($_GET["id"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $category = trim($_POST["category"]);
    $short_description = trim($_POST["short_description"]);
    $description = trim($_POST["description"]);
    $history = trim($_POST["history"]);
    $culture = trim($_POST["culture"]);
    $landmarks = trim($_POST["landmarks"]);
    $main_image = trim($_POST["main_image"]);
    $image_one = trim($_POST["image_one"]);
    $image_two = trim($_POST["image_two"]);
    $image_three = trim($_POST["image_three"]);

    $sql = "UPDATE regions SET
            name = ?, category = ?, short_description = ?, description = ?, history = ?, culture = ?,
            landmarks = ?, main_image = ?, image_one = ?, image_two = ?, image_three = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssi", $name, $category, $short_description, $description, $history, $culture, $landmarks, $main_image, $image_one, $image_two, $image_three, $id);
    mysqli_stmt_execute($stmt);

    header("Location: dashboard.php?msg=updated");
    exit();
}

$stmt = mysqli_prepare($conn, "SELECT * FROM regions WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$region = mysqli_fetch_assoc($result);

if (!$region) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تحديث المحتوى</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>

<nav class="navbar">
    <h2>لوحة المشرف</h2>
    <ul>
        <li><a href="../index.php">زيارة الموقع</a></li>
        <li><a href="dashboard.php">لوحة التحكم</a></li>
        <li><a href="add.php">إضافة محتوى</a></li>
        <li><button class="mode-btn" onclick="toggleMode()">الوضع الليلي</button></li>
        <li><a class="logout-btn" href="logout.php">تسجيل الخروج</a></li>
    </ul>
</nav>

<main class="container">
    <form class="form-card" method="POST" action="">
        <h1 class="page-title">تحديث المحتوى</h1>

        <label>اسم المنطقة أو المكان</label>
        <input type="text" name="name" value="<?php echo isset($region) ? htmlspecialchars($region['name']) : ''; ?>" required>

        <label>التصنيف</label>
        <select name="category" required>
            <?php
            $selectedCategory = isset($region) ? $region['category'] : '';
            $categories = ["مدينة", "دينية", "تراثية", "طبيعية", "ساحلية"];
            foreach ($categories as $cat) {
                $selected = ($selectedCategory == $cat) ? "selected" : "";
                echo "<option value='$cat' $selected>$cat</option>";
            }
            ?>
        </select>

        <label>وصف مختصر</label>
        <input type="text" name="short_description" value="<?php echo isset($region) ? htmlspecialchars($region['short_description']) : ''; ?>" required>

        <label>الوصف العام</label>
        <textarea name="description" required><?php echo isset($region) ? htmlspecialchars($region['description']) : ''; ?></textarea>

        <label>معلومات تاريخية</label>
        <textarea name="history" required><?php echo isset($region) ? htmlspecialchars($region['history']) : ''; ?></textarea>

        <label>معلومات ثقافية</label>
        <textarea name="culture" required><?php echo isset($region) ? htmlspecialchars($region['culture']) : ''; ?></textarea>

        <label>أهم المعالم - افصلي بينها بفواصل</label>
        <input type="text" name="landmarks" value="<?php echo isset($region) ? htmlspecialchars($region['landmarks']) : ''; ?>" required>

        <label>رابط الصورة الرئيسية</label>
        <input type="url" name="main_image" value="<?php echo isset($region) ? htmlspecialchars($region['main_image']) : ''; ?>" required>

        <label>رابط الصورة الإضافية الأولى</label>
        <input type="url" name="image_one" value="<?php echo isset($region) ? htmlspecialchars($region['image_one']) : ''; ?>" required>

        <label>رابط الصورة الإضافية الثانية</label>
        <input type="url" name="image_two" value="<?php echo isset($region) ? htmlspecialchars($region['image_two']) : ''; ?>" required>

        <label>رابط الصورة الإضافية الثالثة</label>
        <input type="url" name="image_three" value="<?php echo isset($region) ? htmlspecialchars($region['image_three']) : ''; ?>" required>

        <button class="btn" type="submit">حفظ التحديث</button>
    </form>
</main>

<footer class="footer">
    © اكتشف السعودية - جامعة الملك سعود
</footer>

</body>
</html>
