<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý địa điểm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1>Quản lý địa điểm du lịch</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ url('/admin/places/create') }}" class="btn btn-primary mb-3">Thêm địa điểm</a>
    <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary mb-3">Dashboard</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>

        @foreach ($places as $place)
            <tr>
                <td>{{ $place->id }}</td>
                <td>{{ $place->name }}</td>
                <td>{{ $place->address }}</td>
                <td>
                    @if ($place->status == 1)
                        Hiển thị
                    @else
                        Ẩn
                    @endif
                </td>
                <td>
                    <a href="{{ url('/admin/places/edit/' . $place->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="{{ url('/admin/places/delete/' . $place->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>