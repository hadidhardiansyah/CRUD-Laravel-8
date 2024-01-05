<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center mb-4">Employee Data</h1>

<div class="container">
    <a href="/addemployee" type="button" class="btn btn-success">Add +</a>
    <div class="row">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Tanggal Bergabung</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>0{{ $row->notelepon }}</td>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                    <td>
                        <a href="/getdata/{{ $row->id }}" class="btn btn-info">Edit</a>
                        <a href="#" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>

    $('.delete').click(function () {
        var idemployee = $(this).attr('data-id');
        Swal.fire({
            title: "Apa kamu yakin ingin menghapus?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "OK!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/"+idemployee+""
                Swal.fire({
                    title: "Dihapus!",
                    text: "Data berhasil dihapus",
                    icon: "success"
                });
            }
        });
    });

</script>
</html>
