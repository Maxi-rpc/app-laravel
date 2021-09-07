@extends('layouts.app')
@section('content')
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
                <button type="submit" class="btn btn-sm btn-outline btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection