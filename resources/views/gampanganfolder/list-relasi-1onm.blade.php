@extends('layouts.app')
@section('title', 'List One to Many')
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
                                <th>Nama Guru</th>
                                <th>Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($el AS $eloquent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eloquent->guru_nama }}</td>
                                <td>
                                    @foreach( $eloquent->guruHasMany AS $mapels )
                                        {{ $mapels->mapel_nama }}
                                    @endforeach
                                </td>
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