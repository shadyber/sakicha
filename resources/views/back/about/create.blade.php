@extends('layouts.back_master')
@section('title','About')
@section('subtitle','Create')
@section('content')
    <div class="top">
        <div class="actions action-btns"><div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
                </button>

                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 92px, 0px);">
                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                </div>

            </div>

            <div class="dt-buttons btn-group">
                <a href="/about" class="btn btn-outline-primary" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="feather icon-list"></i> List</span></a>
            </div>

        </div>
    </div>
    <div class="clear"></div>


    <div class="col-md-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">

                            <div class="media">
                                <a href="javascript: void(0);">
                                    <img src="/back/app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded mr-75" alt="profile image" height="64" width="64">
                                </a>
                                <div class="media-body mt-75">
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="account-upload">Upload new photo</label>
                                        <input type="file" id="account-upload" hidden="">
                                        <button class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Reset</button>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Logo Allowed JPG, GIF or PNG. Max
                                            size of
                                            800kB</small></p>
                                </div>
                            </div>
                            <hr>


                            {!! Form::model($about, [
                                'method' => 'POST',
                                'enctype' => 'multipart/form-data',
                                'route' => ['about.store']
                            ]) !!}

                            {{  Form::token()  }}

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Company Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="name" value="" required="" data-validation-required-message="Company Name is Required">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="about">Logo</label>
                                            <input type="file" name="photo" class="form-control" id="logo" placeholder="Logo" data-validation-required-message="Company Logo">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="about">About</label>
                                            <input type="text" name="about" class="form-control" id="about" placeholder="About" value="" required="" data-validation-required-message="Short Detail is required">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="mission">Mission</label>
                                        <input type="text" class="form-control" name="mission" id="mission" placeholder="Company Mission">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="vision">Vision</label>
                                        <input type="text" class="form-control" name="vision" id="mission" placeholder="Company Vision">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="goal">Goal</label>
                                        <input type="text" class="form-control" name="goal" id="goal" placeholder="Company Goal">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="background">BackGround</label>
                                        <input type="text" class="form-control" name="background" id="background" placeholder="Company Background">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="value">Values</label>
                                        <input type="text" class="form-control" name="value" id="value" placeholder="Company Values">
                                    </div>
                                </div>



                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
