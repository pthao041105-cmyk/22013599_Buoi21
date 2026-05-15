<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa địa điểm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1>Sửa địa điểm du lịch</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/admin/places/update/' . $place->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Tên địa điểm</label>
            <input type="text" name="name" class="form-control" value="{{ $place->name }}">
        </div>

        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control" rows="5">{{ $place->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{ $place->address }}">
        </div>

        <div class="mb-3">
            <label>Link hình ảnh</label>
            <input type="text" name="image" class="form-control" value="{{ $place->image }}">
        </div>

        <div class="mb-3">
            <label>Trạng thái</label>
            <select name="status" class="form-control">
                <option value="1" @if($place->status == 1) selected @endif>Hiển thị</option>
                <option value="0" @if($place->status == 0) selected @endif>Ẩn</option>
            </select>
        </div>

        <button class="btn btn-primary">Cập nhật</button>
        <a href="{{ url('/admin/places') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>

</body>
</html>