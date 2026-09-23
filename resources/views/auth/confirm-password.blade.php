@extends('partials.layout')
@section('title', 'Confirm Password')

@section('content')

<div class="flex justify-center mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Confirm password</h2>

            <p class="text-sm text-base-content/70 mb-4">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

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
                        autocomplete="current-password">
                    @error('password')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
