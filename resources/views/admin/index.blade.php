<!DOCTYPE html>
<html>
<head>
    <title>Quản lý địa điểm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Danh sách địa điểm</h2>

    <a href="/admin/places/create" class="btn btn-primary mb-3">
        Thêm địa điểm
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Hành động</th>
        </tr>

        @foreach($places as $place)

        <tr>
            <td>{{ $place->id }}</td>
            <td>{{ $place->name }}</td>
            <td>{{ $place->address }}</td>

            <td>
                <a href="/admin/places/edit/{{ $place->id }}"
                   class="btn btn-warning">
                    Sửa
                </a>

                <a href="/admin/places/delete/{{ $place->id }}"
                   class="btn btn-danger">
                    Xóa
                </a>
            </td>
        </tr>

        @endforeach

    </table>

</div>

</body>
</html>