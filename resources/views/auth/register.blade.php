@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div style="text-align:center">
                        <img src="img/user.png" style="width:20%; height:auto;">
                    </div>                
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-default" style="border:1px solid #ddd">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                            <label for="Gmail account" class="col-md-4 col-form-label text-md-right">Gmail account</label>

                            <div class="col-md-8">
                                <a href="{{ url('auth/google') }}" class="btn btn-danger">Register with Gmail&ensp;&ensp;&ensp;</a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Facebook account" class="col-md-4 col-form-label text-md-right" style="padding-left:10px">Facebook account</label>

                            <div class="col-md-8">
                            <a href="{{url('/redirect/facebook')}}" class="btn btn-primary">Register with Facebook</a>
                                </a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Twitter account" class="col-md-4 col-form-label text-md-right" style="padding-left:10px">Twitter account</label>

                            <div class="col-md-8">
                            <a href="{{url('/auth/redirect/twitter')}}" class="btn btn-info">Register with Twitter&ensp;&ensp;&ensp;</a>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
