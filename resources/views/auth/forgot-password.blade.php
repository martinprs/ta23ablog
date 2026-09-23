@extends('partials.layout')
@section('title', 'Forgot Password')

@section('content')

@if (session('status'))
<div role="alert" class="alert alert-success mb-4">
    <span>{{ session('status') }}</span>
</div>
@endif

<div class="flex justify-center mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Forgot password</h2>

            <p class="text-sm text-base-content/70 mb-4">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">@lang('Email')</span>
                    </label>
                    <input
                        type="email"
                        id="email"
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

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
