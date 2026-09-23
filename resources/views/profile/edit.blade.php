@extends('partials.layout')
@section('title', 'Profile')

@section('content')

<div class="py-12">
    <div class="max-w-3xl mx-auto space-y-6">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>
</div>

@endsection