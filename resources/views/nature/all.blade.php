@extends('layout.main')

@section('content')
<div class="title-container">
    <h1>Ini adalah halaman Tumbuh-tumbuhan</h1>
</div>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <!-- <th>Populasi</th>    -->
                <!-- <th>Tanggal Penanaman</th>    -->
                <th>Action</th>   
            </tr>
        </thead>
        <tbody>
            @foreach ($plant as $plants)
                <tr>
                    <td>{{ $plants['id'] }}</td>
                    <td>{{ $plants['nama'] }}</td>
                    <td>{{ $plants['jenis'] }}</td>
                    <!-- <td>{{ $plants['populasi'] }}</td> -->
                    <!-- <td>{{ $plants['tanggal_penanam'] }}</td> -->
                    <td>
                    <a type="button" class="btn btn-outline-success" href="/nature/detail/{{ $plants['id'] }}">Detail</a>
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
