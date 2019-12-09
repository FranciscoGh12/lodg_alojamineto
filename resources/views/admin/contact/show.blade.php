@extends('layouts.app')
@section('title','Dashboard')
@push('css')

@endpush
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary" data-background-color="purple">
                        <h4 class="title">{{ $contact->subject }}</h4>
                    </div>
                    <div class="card-content">
                       <div style="padding:30px" class="row">
                           <div class="col-md-12">
                               <h4><strong>Name: {{ $contact->name }}</strong></h4>
                               <b>Email: {{ $contact->email }}</b> <br>
                               <b>Direccion: {{ $contact->direction }}</b> <br>
                               <strong>Mensaje: </strong><hr>
                               <p>{{ $contact->message }}</p><hr>
                           </div>
                       </div>
                        <a href="{{ route('contact.index') }}" class="btn btn-danger">Back</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
