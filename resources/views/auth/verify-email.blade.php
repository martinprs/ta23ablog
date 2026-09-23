@extends('partials.layout')
@section('title', 'Verify Email')

@section('content')

<div class="flex justify-center mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Verify your email</h2>

            <p class="text-sm text-base-content/70 mb-4">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div role="alert" class="alert alert-success mb-4">
                    <span>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</span>
                </div>
            @endif

            <div class="flex flex-col gap-3 mt-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="btn btn-primary w-full">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-ghost w-full">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
