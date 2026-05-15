<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 450px;">
        <div class="card-header text-center">
            <h3>Đăng nhập</h3>
        </div>

        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
            </form>

            <p class="mt-3 text-center">
                Chưa có tài khoản?
                <a href="{{ url('/register') }}">Đăng ký</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>