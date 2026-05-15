<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chi tiết địa điểm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1>{{ $place->name }}</h1>

    @if ($place->image)
        <img src="{{ $place->image }}" class="img-fluid mb-3" style="max-height: 400px;">
    @endif

    <p><b>Địa chỉ:</b> {{ $place->address }}</p>
    <p><b>Mô tả:</b></p>
    <p>{{ $place->description }}</p>

    <a href="{{ url('/places') }}" class="btn btn-secondary">Quay lại</a>
</div>

</body>
</html>