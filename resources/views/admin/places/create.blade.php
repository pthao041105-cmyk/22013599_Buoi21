<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm địa điểm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1>Thêm địa điểm du lịch</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/admin/places/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Tên địa điểm</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3">
            <label>Link hình ảnh</label>
            <input type="text" name="image" class="form-control" placeholder="https://...">
        </div>

        <div class="mb-3">
            <label>Trạng thái</label>
            <select name="status" class="form-control">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
        </div>

        <button class="btn btn-primary">Lưu</button>
        <a href="{{ url('/admin/places') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>

</body>
</html>