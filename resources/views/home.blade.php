<!DOCTYPE html>
<html>
<head>
    <title>Du lịch</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Website Du Lịch</h1>
    
    @if(session('isLogin'))

    <p>Xin chào: {{ session('name') }}</p>

    <a href="/logout" class="btn btn-danger">
        Đăng xuất
    </a>

@endif

    <a href="/places" class="btn btn-primary">Danh sách địa điểm</a>

    <a href="/login" class="btn btn-success">Đăng nhập</a>

    <a href="/register" class="btn btn-warning">Đăng ký</a>

</div>

</body>
</html>