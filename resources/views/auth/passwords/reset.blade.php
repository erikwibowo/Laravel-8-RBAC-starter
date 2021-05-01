@extends('auth.layout.master')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('template/admin/assets/images/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">@lang('title.reset-password')</h1>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="form-group position-relative mb-4">
                            <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="@lang('title.email')">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-4">
                            <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="@lang('title.password')">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-4">
                            <input id="password-confirm" type="password" class="form-control form-control-xl" name="password_confirmation" required autocomplete="new-password" placeholder="@lang('title.confirm-password')">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-xl shadow-lg mt-4">@lang('title.reset-password')</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
@endsection