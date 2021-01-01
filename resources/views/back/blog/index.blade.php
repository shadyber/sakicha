@extends('layouts.back_master')
@section('title', 'Blog')
@section('subtitle', 'List')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/blog/create"><i class="fa fa-plus"></i></a>
                List All Blog
            </div>
            <div class="card-body row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                      <h2>{{$blog->title}}</h2>
                        <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="img img-fluid">
                        <p>{{$blog->detail}}</p>
                        <p>
                            <a href="/blog/{{$blog->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/blog/{{$blog->id}}/edit" class="btn btn-outline-danger">delete</a>
                        </p>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
