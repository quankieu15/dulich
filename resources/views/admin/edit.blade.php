<!DOCTYPE html>
<html>
<head>
    <title>Sửa địa điểm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Sửa địa điểm</h2>

    <form method="POST"
          action="/admin/places/update/{{ $place->id }}">

        @csrf

        <div class="mb-3">
            <label>Tên địa điểm</label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $place->name }}">
        </div>

        <div class="mb-3">
            <label>Mô tả</label>

            <textarea name="description"
                      class="form-control">{{ $place->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Địa chỉ</label>

            <input type="text"
                   name="address"
                   class="form-control"
                   value="{{ $place->address }}">
        </div>

        <button type="submit"
                class="btn btn-primary">
            Cập nhật
        </button>

    </form>

</div>

</body>
</html>