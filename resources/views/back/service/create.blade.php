@extends('layouts.back_master')
@section('title', 'Create')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/service"><i class="fa fa-list"></i></a>
                Create A Service
            </div>
            <div class="card-body">

                <form action="/service" method="post" enctype="multipart/form-data">
                    {{  Form::token()  }}
                    <div class="form-group">
                        <label>Your Service Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Service Title" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Your Service Detail</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <textarea class="form-control" name="detail" placeholder="Service Detail" aria-label="detail" aria-describedby="basic-addon11" required>
                            </textarea>
                            @error('detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your Service Icon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <input type="text" name="icon" class="form-control" placeholder="Icon" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="submit" class="btn btn-dark">Cancel</button>
                {{{ Form::close() }}}

            </div>
        </div>
    </div>

@endsection
