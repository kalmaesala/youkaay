<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
   
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            padding: 10px 20px;
            color: #fff;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .services {
            display: flex;
            flex-wrap: wrap; /* يتيح للعناصر الانتقال إلى سطر جديد */
            gap: 20px; /* إضافة مسافة بين العناصر */
            justify-content: space-around;
            margin: 20px 0;
        }
        .service {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 20px); /* عرض العناصر مع الأخذ بعين الاعتبار الفجوات */
            min-width: 200px; /* لتحديد أصغر عرض ممكن للعناصر */
        }
         .service:hover {
            background-color: #e9ecef;
        }
        .service h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .service p {
            color: #666;
        }
        img {
            max-width: 100%; /* لتحديد أن الصور تتناسب مع العنصر */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>مرحبًا eslam123</h1>
        <div>
            <a href="password.php">تغيير كلمة السر</a>
            <a href="logout.php?logout">تسجيل الخروج</a>
        </div>
    </div>

    <div class="services">
        <div class="service" onclick="window.location.href='fppaypal';">
            <h2>فيس بوك شخصي</h2>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaJFo7WKbbwIyIhktVMPpG1Glfx_eJzXkbmw&s"/>
        </div>
        <div class="service" onclick="window.location.href='buspaypal';">
            <h2>فيس بوك او انستجرام بزنز</h2>
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaJFo7WKbbwIyIhktVMPpG1Glfx_eJzXkbmw&s"/>

    </div>
</body>
</html>

