@extends('partials.layout')
@section('title', 'Edit Tag')
@section('content')
    <div class="card bg-base-300 w-full max-w-xl mx-auto">
        <div class="card-body">
            <h1 class="card-title">Edit Tag</h1>
            <form action="{{ route('tags.update', $tag) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name</legend>
                    <input
                        type="text"
                        name="name"
                        class="input w-full"
                        value="{{ old('name', $tag->name) }}"
                        placeholder="Tag name"
                        maxlength="255"
                        required
                        autofocus
                    />
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>
                <div class="card-actions justify-end mt-4">
                    <a href="{{ route('tags.index') }}" class="btn btn-ghost">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
