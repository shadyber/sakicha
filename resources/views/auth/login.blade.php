@extends('layouts.auth_master')
@section('title','Login')
@section('greeting','Welcome Back Please Login')
@section('content')

                    <form method="POST" action="{{ route('login') }}">
                        @csrf



                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-control-position">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <label for="user-name">Email</label>
                        </fieldset>

                        <fieldset class="form-label-group position-relative has-icon-left">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-control-position">
                                <i class="feather icon-lock"></i>
                            </div>
                            <label for="user-password">Password</label>
                        </fieldset>

                        <div class="form-group d-flex justify-content-between align-items-center">
                            <div class="text-left">
                                <fieldset class="checkbox">
                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                        <input type="checkbox" name="rememeber" id="remember">
                                        <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                        <span class="">Remember me</span>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="text-right">


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                        <a href="/register" class="btn btn-outline-primary float-left btn-inline">Register</a>

                        <button type="submit" class="btn btn-primary float-right btn-inline">
                            {{ __('Login') }}
                        </button>


                    </form>

@endsection
