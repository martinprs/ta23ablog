@extends('partials.layout')
@section('title', 'Reset Password')

@section('content')

<div class="flex justify-center mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Reset password</h2>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Email')</span>
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        class="input input-bordered w-full"
                        value="{{ old('email', $request->email) }}"
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
                        id="password"
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
                        id="password_confirmation"
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

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
