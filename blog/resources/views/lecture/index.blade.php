@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="lecture/create" class="btn btn-primary">Tambah Data</a>
                    <hr/>
                    @if($lectures->isEmpty())
                        Tidak terdapat data
                    @else
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($lectures as $lecture)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $lecture->nidn }}</td>
                                    <td>{{ $lecture->nama }}</td> 
                                    <td>
                                        @if($lecture->status == 1)
                                            <span class="badge text-bg-success">Aktif</span>
                                        @else
                                            <span class="badge text-bg-danger">Tidak Aktif</span>
                                        @endif
                                    </td>    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
