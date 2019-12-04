@extends('layouts.app')

@section('title','Editar')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Editar tipo de habitacion</h4>
                        </div>
                        <br> <br>
                        <div class="card-content">
                            <form method="POST" action="{{ route('typeRoom.update',$typeRoom->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tipo</label>
                                            <input type="text" class="form-control" name="type" value="{{ $typeRoom->type_room }}">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('typeRoom.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
