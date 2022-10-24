@extends('layouts.app')

@section('style')
<style>
    .google-button {
        margin-right: 15px;
        min-width: 50% !important;
        height: 40px;
        border-width: 0;
        background: white;
        color: #737373;
        border-radius: 5px;
        white-space: nowrap;
        transition-duration: 150ms;
        transition-timing-function: ease-in-out;
        padding: 10px;
        text-decoration: none;
        box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.1);
    }

    .google-button:hover {
        color: #383838;
    }

    .google-button__icon {
        display: inline-block;
        vertical-align: middle;
        margin: 0px 0 8px 8px;
        width: 18px;
        height: 18px;
        box-sizing: border-box;
    }

    .google-button__text {
        display: inline-block;
        vertical-align: middle;
        padding: 0 10px;
        font-size: 14px;
        font-weight: bold;
        font-family: 'Roboto', arial, sans-serif;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mt-4 mb-0">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <a class="google-button" href="{{route('login.google')}}">
                                    <span class="google-button__icon">
                                        <img src="https://e1.pngegg.com/pngimages/209/923/png-clipart-logo-google-g-suite-google-pay-google-doodle-texte-cercle-ligne-zone-thumbnail.png"
                                            alt="" srcset="" width="15">
                                    </span>
                                    <span class="google-button__text">Sign in with Google</span>
                                </a>
                                <a class="google-button" href="{{route('login.facebook')}}">
                                    <span class="google-button__icon">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/768px-Facebook_f_logo_%282019%29.svg.png"
                                            alt="" srcset="" width="15">
                                    </span>
                                    <span class="google-button__text">Sign in with Facebook</span>
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
