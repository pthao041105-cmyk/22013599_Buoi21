<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h1>Trang quản trị</h1>

    <p>Xin chào admin: <b>{{ session('name') }}</b></p>

    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-primary">
                Tổng người dùng: {{ $totalUsers }}
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-success">
                Tổng địa điểm: {{ $totalPlaces }}
            </div>
        </div>
    </div>

    <a href="{{ url('/admin/places') }}" class="btn btn-primary">Quản lý địa điểm</a>
    <a href="{{ url('/admin/users') }}" class="btn btn-info">Danh sách người dùng</a>
    <a href="{{ url('/logout') }}" class="btn btn-danger">Đăng xuất</a>
</div>

</body>
</html>