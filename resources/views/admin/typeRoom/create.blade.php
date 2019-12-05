@extends('layouts.app')

@section('title','Agregar tipo de habitacion')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Agregar nuevo tipo de habitacion</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('typeRoom.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label  class="control-label">Tipo</label>
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                    </div>
                                    <div class="col-md-">
                                            <div class="form-group label-floating text-md-left">
                                            <label for=""><i><span class="fa fa-usd fa-2x"></span></i></label>

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
