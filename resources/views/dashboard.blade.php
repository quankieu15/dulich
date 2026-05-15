<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Trang quản trị</h1>

    <p>Xin chào Admin: {{ session('name') }}</p>

    <a href="/admin/places" class="btn btn-primary">
        Quản lý địa điểm
    </a>

    <a href="/admin/users" class="btn btn-success">
        Quản lý users
    </a>

    <a href="/logout" class="btn btn-danger">
        Đăng xuất
    </a>

</div>

</body>
</html>