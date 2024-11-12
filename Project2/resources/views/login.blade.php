<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery PreSchool - Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Login.css')}} ">
</head>
<body>
 <!-- Header Section -->
 <header class="py-3 shadow-sm" style="background-color: #ffe4e1;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="title">NURSERY PRESCHOOL</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sự Kiện</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giáo Dục</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Liên Hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đăng Nhập</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

    <!-- Login Form -->
    <main class="login-section">
        <div class="logo">
            <img src="{{ asset('img/Login.png') }}" alt="Nursery PreSchool">
            <h1>Nursery PreSchool</h1>
        </div>
        <form class="login-form">
            <label for="phone">Số điện thoại</label>
            <input type="text" id="phone" placeholder="*****">
            
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" placeholder="******">
            
            <button type="submit" class="login-btn">Đăng nhập</button>
            
            <a href="#" class="forgot-password">Quên Mật Khẩu</a>
            <p class="note">Lưu ý: <span>Hãy sử dụng tài khoản nhà trường cung cấp</span></p>
        </form>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
