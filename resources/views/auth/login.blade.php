@extends('partials.layout')
@section('title', 'Login')

@section('content')

@if (session('status'))
<div role="alert" class="alert alert-success mb-4">
    <span>{{ session('status') }}</span>
</div>
@endif

<div class="flex justify-center mt-10">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Email')</span>
                    </label>
                    <input
                        type="email"
                        name="email"
                        class="input input-bordered w-full"
                        value="{{ old('email') }}"
                        placeholder="@lang('Email')"
                        required
                        autofocus
                        autocomplete="username">
                    @error('email')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Password')</span>
                    </label>
                    <input
                        type="password"
                        name="password"
                        class="input input-bordered w-full"
                        placeholder="@lang('Password')"
                        required
                        autocomplete="current-password">
                    @error('password')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-3">
                    <label class="label cursor-pointer justify-start gap-2">
                        <input name="remember" type="checkbox" class="checkbox">
                        <span class="label-text">@lang('Remember me')</span>
                    </label>
                </div>
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                    <a class="link link-hover text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                    <button class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection