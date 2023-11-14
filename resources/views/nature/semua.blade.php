@extends('layout.main')

@section('content')
<div class="title-container">
    <h1>Ini adalah halaman Hewani</h1>
</div>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <!-- <th>Populasi</th>    -->
                <!-- <th>Habitat</th>    -->
                <th>Action</th>   
            </tr>
        </thead>
        <tbody>
            @foreach ($animal as $animals)
                <tr>
                    <td>{{ $animals['id'] }}</td>
                    <td>{{ $animals['nama'] }}</td>
                    <td>{{ $animals['jenis'] }}</td>
                    <!-- <td>{{ $animals['populasi'] }}</td> -->
                    <!-- <td>{{ $animals['habitat'] }}</td> -->
                    <td>
                    <a type="button" class="btn btn-outline-success" href="/nature/detailh/{{ $animals['id'] }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<style>
    .title-container{
        text-align: center;
    }

    .table-container {
        width: 80%;
        margin: 0 auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .modal-content {
    width: 500px;
    margin: 0 auto;
}

.modal-header {
    text-align: center;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    text-align: right;
}
</style>

@endsection
