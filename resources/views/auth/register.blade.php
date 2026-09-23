@extends('partials.layout')
@section('title', 'Register')

@section('content')

<div class="flex justify-center mt-10">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Name')</span>
                    </label>
                    <input
                        type="text"
                        name="name"
                        class="input input-bordered w-full"
                        value="{{ old('name') }}"
                        placeholder="@lang('Name')"
                        required
                        autofocus
                        autocomplete="name">
                    @error('name')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

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
                        autocomplete="new-password">
                    @error('password')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Confirm Password')</span>
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="input input-bordered w-full"
                        placeholder="@lang('Confirm Password')"
                        required
                        autocomplete="new-password">
                    @error('password_confirmation')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>


                <div class="flex items-center justify-between mt-4">
                    <a class="link link-hover text-sm" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection