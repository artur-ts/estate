@extends('admin.layouts.auth-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">

                        <form action="{{ route('admin-dashboard.login', app()->getLocale()) }}" method="post">
                            @csrf
                            <h1>{{ __('login') }}</h1>
                            <p class="text-muted"> {{ __('Sign In to your account') }}</p>
                            @if( session('loginStatusError') )
                                <div class="mb-4 rounded-lg bg-red-500 text-white text-center p-6">
                                    <div class="alert alert-danger" role="alert">{{ session('loginStatusError') }}</div>
                                </div>
                            @endif
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt"></i>
                                    </span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="{{ __('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="{{ __('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">{{ __('login') }}</button>
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
