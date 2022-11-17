@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Data</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url' => 'lecture/store']) !!}
                        <div class="mb-3">
                            {{ Form::label('nidn', 'NIDN') }}
                            {{ Form::text('nidn', null, ['class' => 'form-control', 'placehoder' => 'NIDN', 'required' => 'true']) }}
                        </div>
                        <div class="mb-3">
                            {{ Form::label('nama', 'Nama Dosen') }}
                            {{ Form::text('nama', null, ['class' => 'form-control', 'placehoder' => 'Nama Dosen']) }}
                        </div>
                            {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
