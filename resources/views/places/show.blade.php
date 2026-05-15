<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết địa điểm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>{{ $place->name }}</h2>

    <p>
        <strong>Địa chỉ:</strong>
        {{ $place->address }}
    </p>

    <p>
        <strong>Mô tả:</strong>
        {{ $place->description }}
    </p>

    <a href="/places" class="btn btn-secondary">
        Quay lại
    </a>

</div>

</body>
</html>