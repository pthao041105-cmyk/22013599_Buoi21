<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header text-center">
            <h3>Đăng ký tài khoản</h3>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/register') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Họ tên</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
            </form>

            <p class="mt-3 text-center">
                Đã có tài khoản?
                <a href="{{ url('/login') }}">Đăng nhập</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>