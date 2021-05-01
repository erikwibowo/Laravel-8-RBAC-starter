@extends('auth.layout.master')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('template/admin/assets/images/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">@lang('title.login')</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative mb-4">
                            <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('title.email')">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-4">
                            <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('title.password')">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-gray-600" for="remember">
                                @lang('title.rememberme')
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-xl shadow-lg mt-4">@lang('title.login')</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        @if (Route::has('password.request'))
                            <p><a class="font-bold" href="{{ route('password.request') }}">@lang('title.forgot-password')</a></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
@endsection