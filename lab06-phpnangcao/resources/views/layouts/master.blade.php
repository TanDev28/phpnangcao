<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cửa Hàng Laravel')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align:
                center;
            padding: 10px;
            margin-top: 40px;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            min-height: 50vh;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Laravel Shop</h2>
        <p>Trang chủ | Sản phẩm | Giới thiệu</p>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2026 Bản quyền thuộc về sinh viên Cao Thắng.</p>
    </div>
</body>

</html>