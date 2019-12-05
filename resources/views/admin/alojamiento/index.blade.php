@extends('layouts.app')

@section('title','Alojamientos')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{route('alojamiento.create')}}" class="btn btn-primary">Agregar</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Alojamientos</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Foto</th>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Descripccion</th>
                                <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($lodgments as $key=>$lodg)


                                        <tr>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/lodgments/'.$lodg->picture_lodg) }}" style="height: 100px; width: 100px" alt=""></td>
                                        <td>{{$key+1}}</td>
                                        <td>{{$lodg->type_lodg}}</td>
                                        <td>{{$lodg->name_lodg}}</td>
                                        <td>{{$lodg->direction_lodg}}</td>
                                        <td>{{$lodg->description_lodg}}</td>
                                            <td>
                                                <a href="{{ route('alojamiento.edit',$lodg->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $lodg->id }}" action="{{ route('alojamiento.destroy',$lodg->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Esta a punto de borrar un alojamiento. Esta seguro?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$lodg->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
