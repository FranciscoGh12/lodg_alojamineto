@extends('layouts.app')

@section('title','Reservaciones')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Reservaciones</h4>
                        </div>

                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Huesped</th>
                                <th>Entrada</th>
                                <th>Salida</th>
                                <th>Pago</th>
                                <th>Habitacion</th>
                                <th>Promocion</th>
                                <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $key => $reserv)
                                    <?php
                                    $huesped = DB::table('clients')->where('id',$reserv->client_id)->get();
                                    $rooms = DB::table('rooms')->where('id',$reserv->room_id)->get();
                                    ?>

                                        <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                            @foreach ($huesped as $h)
                                                {{$h->name_client}}
                                            @endforeach
                                        </td>
                                    <td>{{$reserv->start_reservation}}</td>
                                    <td>{{$reserv->end_reservation}}</td>
                                    <td>default.jpg</td>
                                    <td>
                                        @foreach ($rooms as $r)
                                            {{$r->num_room}}
                                        @endforeach
                                    </td>
                                            <td></td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="" action="#" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{}}').submit();
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
