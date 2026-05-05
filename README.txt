مشروع: اكتشف السعودية – Discover Saudi Arabia

طريقة التشغيل على XAMPP:
1) انسخي مجلد discover-saudi-project إلى:
   C:\xampp\htdocs\discover-saudi-project

2) افتحي XAMPP وشغلي Apache و MySQL.

3) افتحي phpMyAdmin:
   http://localhost:8080/phpmyadmin
   أو حسب بورت Apache عندك.

4) من phpMyAdmin:
   - اضغطي Import
   - اختاري ملف database.sql الموجود داخل المشروع
   - اضغطي Go

5) إذا بورت MySQL عندك مو 3307:
   افتحي includes/db.php وعدلي:
   $port = 3307;
   إلى البورت الموجود عندك مثل 3306.

6) رابط الموقع:
   http://localhost:8080/discover-saudi-project/index.php

7) رابط دخول المشرف:
   http://localhost:8080/discover-saudi-project/admin/login.php

بيانات المشرف:
Username: admin
Password: admin123

ملاحظات:
- الموقع كامل باللغة العربية.
- الصفحات العامة: الرئيسية، معرض المناطق، صفحة التفاصيل.
- صفحات المشرف: تسجيل الدخول، لوحة التحكم، إضافة محتوى، تحديث محتوى، حذف مع تأكيد، تسجيل خروج.
- رسائل الإضافة/التحديث/الحذف تظهر داخل لوحة التحكم وليس alert.
- صفحات المشرف محمية بالجلسات Sessions.
