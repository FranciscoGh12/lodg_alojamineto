@extends('layouts.app')

@section('title','Agregar alojamiento')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-12">
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header card-header-primary" data-background-color="purple">
                        <h4 class="title">Agregar alojamiento</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{ route('alojamiento.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div style="padding:30px" class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name:</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tipo:</label>
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Direccion:</label>
                                            <input type="text" class="form-control" name="direction">
                                        </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripccion:</label>
                                            <textarea maxlength="180" name="description" class="form-control" id="descriptionFormLodg" rows="2"></textarea>
                                        </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="label-floating">
                                            <label class="control-label">Foto:</label>
                                            <input class="form-control" type="file" name="image" id="imageLodg">
                                        </div>
                                </div>
                            </div>
                            <a href="{{ route('alojamiento.index') }}" class="btn btn-danger">Back</a>
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
