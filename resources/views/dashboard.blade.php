<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h3>ĐĂNG NHẬP THÀNH CÔNG</h3>
        </div>

        <div class="card-body">
            <p><b>Họ tên:</b> {{ session('name') }}</p>
            <p><b>Username:</b> {{ session('username') }}</p>
            <p><b>Email:</b> {{ session('email') }}</p>
            <p><b>Thời gian đăng nhập:</b> {{ session('login_time') }}</p>

            <a href="{{ url('/places') }}" class="btn btn-primary">Xem địa điểm du lịch</a>
            <a href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

</body>
</html>