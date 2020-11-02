@extends('layouts.app')
@section('title', 'List Pagination')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6 text-left">
                        <strong>List</strong>
                    </div>
                    <div class="col-6 text-right">
                        <form method="GET">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" aria-label="Nama" aria-describedby="addon-wrapping">
                                <input type="text" class="form-control" placeholder="Umur" name="umur" aria-label="Umur" aria-describedby="addon-wrapping">
                                <div class="input-group-prepend">
                                    <button class="input-group-text" id="addon-wrapping">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lq AS $query)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $query->nama }}</td>
                                <td>{{ $query->umur }}</td>
                                <td>{{ $query->alamat }}</td>
                                <td>{{ $query->posisi }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="pagination">
                    {{ $lq->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection