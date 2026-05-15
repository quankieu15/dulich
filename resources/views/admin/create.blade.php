<!DOCTYPE html>
<html>
<head>
    <title>Thêm địa điểm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Thêm địa điểm</h2>

    <form method="POST" action="/admin/places/store">

        @csrf

        <div class="mb-3">
            <label>Tên địa điểm</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description"
                      class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text"
                   name="address"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Thêm
        </button>

    </form>

</div>

</body>
</html>