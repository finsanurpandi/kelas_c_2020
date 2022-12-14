@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="lecture/create" class="btn btn-primary">TAMBAH DATA</a>
                    <hr/>
                    
                    @if($students->isEmpty())
                        Tidak ada ada.
                    @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                                <th>DOSEN WALI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->npm }}</td>
                                <td>{{ $student->nama }}</td>
                                <td>
                                    {{ $student->class}}
                                </td>
                                <td>
                                    {{ $student->lecture->nama}}
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
