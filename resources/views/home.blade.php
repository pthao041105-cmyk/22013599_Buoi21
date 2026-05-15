<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ du lịch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Du lịch Mini</a>
        <div>
            <a class="btn btn-light btn-sm" href="{{ url('/places') }}">Địa điểm</a>
            <a class="btn btn-light btn-sm" href="{{ url('/login') }}">Đăng nhập</a>
            <a class="btn btn-warning btn-sm" href="{{ url('/register') }}">Đăng ký</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Website quản lý địa điểm du lịch mini</h1>
    <p>Khám phá các địa điểm du lịch nổi bật.</p>

    <h3 class="mt-4">Địa điểm mới nhất</h3>

    <div class="row">
        @foreach ($places as $place)
            <div class="col-md-4">
                <div class="card mb-3">
                    @if ($place->image)
                        <img src="{{ $place->image }}" class="card-img-top" height="180" style="object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h5>{{ $place->name }}</h5>
                        <p>{{ $place->address }}</p>
                        <a href="{{ url('/places/' . $place->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>