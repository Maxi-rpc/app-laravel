@extends('layouts.app')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-6 text-center">
            <h2>Crear nuevo Post</h2>
        </div>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{url('post/store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea type="text" class="form-control" name="body" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                <a href="javascript:history.back()" class="btn btn-sm btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
@endsection