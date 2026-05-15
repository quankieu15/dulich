<!DOCTYPE html>
<html>
<head>
    <title>Danh sách địa điểm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Danh sách địa điểm du lịch</h2>
    <form action="/places/search" method="GET" class="mb-4">

    <div class="row">

        <div class="col-md-10">
            <input type="text"
                   name="keyword"
                   class="form-control"
                   placeholder="Nhập tên địa điểm">
        </div>

        <div class="col-md-2">
            <button type="submit"
                    class="btn btn-primary w-100">
                Tìm kiếm
            </button>
        </div>

    </div>

</form>

    <div class="row">

        @foreach($places as $place)

        <div class="col-md-4">

            <div class="card mb-3">

                <div class="card-body">

                    <h4>{{ $place->name }}</h4>

                    <p>{{ $place->address }}</p>

                    <a href="/places/{{ $place->id }}"
                       class="btn btn-primary">
                        Xem chi tiết
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>