@extends('layouts.app')
@section('title', 'List Many to Many')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <strong>List Eloquent</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th>Nama Anggota</th>
                                <th>Hobi</th>
                                <th width="5%">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($el AS $eloquent)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $eloquent->anggota_nama }}</td>
                                    <td>
                                        <ol>
                                            @foreach( $eloquent->hobiBelongsToMany AS $hobis )
                                                <li>{{ $hobis->hobi_nama }}</li>
                                            @endforeach
                                        </ol>
                                    </td>
                                <td class="text-center">{{ $eloquent->hobiBelongsToMany->count() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection