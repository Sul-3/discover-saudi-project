<?php
include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>اكتشف السعودية</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>

<nav class="navbar">
    <h2>اكتشف السعودية</h2>
    <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="regions.php">معرض المناطق</a></li>
        <li><a href="admin/login.php">لوحة المشرف</a></li>
        <li><button class="mode-btn" onclick="toggleMode()">الوضع الليلي</button></li>
    </ul>
</nav>

<main class="container">
    <section class="hero">
        <div class="hero-card">
            <h1>موقع ثقافي تفاعلي للتعريف بالمملكة</h1>
            <p>
                يهدف هذا الموقع إلى تعريف الزوار بالمملكة العربية السعودية، مناطقها، ثقافتها،
                معالمها التاريخية، وأهم الأماكن التي تعكس تنوعها الحضاري والطبيعي.
            </p>
            <p>
                يمكنكِ تصفح معرض المناطق، استخدام الفلترة، ثم اختيار أي منطقة لعرض تفاصيلها
                التاريخية والثقافية والمعالم المرتبطة بها.
            </p>
            <a class="btn" href="regions.php">ابدأ الاستكشاف</a>
        </div>

        <div class="hero-welcome">
            <div>
                <h1>أهلاً بك 👋</h1>
                <p>ابدأ رحلتك لاكتشاف جمال المملكة</p>
            </div>
        </div>
    </section>

    <section class="info-grid">
        <div class="info-card">
            <h3>⭐ الهدف</h3>
            <p>تقديم معلومات ثقافية وسياحية عن مناطق المملكة بطريقة منظمة وتفاعلية.</p>
        </div>

        <div class="info-card">
            <h3>🗺️ المناطق</h3>
            <p>عرض مناطق ومدن سعودية مختلفة مع إمكانية تصفيتها حسب نوعها.</p>
        </div>

        <div class="info-card">
            <h3>🏛️ التفاصيل</h3>
            <p>عرض معلومات تاريخية وثقافية ومعالم مهمة لكل منطقة أو مكان.</p>
        </div>
    </section>
</main>

<footer class="footer">
    © اكتشف السعودية - جامعة الملك سعود
</footer>

</body>
</html>
