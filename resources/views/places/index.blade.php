<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách địa điểm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1>Danh sách địa điểm du lịch</h1>

    <form action="{{ url('/places/search') }}" method="GET" class="d-flex mb-4">
        <input type="text" name="keyword" class="form-control me-2" placeholder="Nhập tên địa điểm..." value="{{ $keyword ?? '' }}">
        <button class="btn btn-primary">Tìm kiếm</button>
    </form>

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
                        <a href="{{ url('/places/' . $place->id) }}" class="btn btn-success">Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ url('/') }}" class="btn btn-secondary">Về trang chủ</a>
</div>

</body>
</html>