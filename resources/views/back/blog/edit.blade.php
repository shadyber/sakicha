@extends('layouts.back_master')
@section('title', 'Blog')
@section('subtitle', 'Edit')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/blog"><i class="fa fa-list"></i></a>
                Edit A Blog
            </div>
            <div class="card-body">


                {!! Form::model($blog, [
                    'method' => 'PATCH',
                    'route' => ['blog.update', $blog->id],
                ]) !!}

                {{  Form::token()  }}
                    <div class="form-group">
                        <label>Your Title</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Blog Title" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Detail</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <textarea class="form-control" name="detail" placeholder="Detail" aria-label="detail" aria-describedby="basic-addon11" required>
                           {{$blog->detail}}
                            </textarea>
                            @error('detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                <input type="hidden" value="{{$blog->photo}}" name="photo">





                    <div class="form-group">
                        <label>Tags</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <input type="text" name="tags"  value="{{$blog->tags}}"  class="form-control" placeholder="Tags" aria-label="Tags" aria-describedby="basic-addon11" required>
                            @error('tags')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Category</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <select name="category" class="form-control"  value="{{$blog->category}}"  placeholder="Category" aria-label="Tags" aria-describedby="basic-addon11" required>
                                @foreach($blogCategory as $category)
                                    <option value="{{$category->id}}" label="{{$category->name}}">{{$category->detail}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="submit" class="btn btn-outline-dark">Cancel</button>
                {{{ Form::close() }}}

            </div>
        </div>
    </div>

@endsection
