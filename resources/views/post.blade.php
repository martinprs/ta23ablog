@extends('partials.layout')
@section('title', $post->title)
@section('content')
    @include('partials.post-card', ['full' => true])

    <form method="POST" action="{{ route('comment', $post) }}" class="card bg-base-300 shadow-sm my-2">
        @csrf
        <div class="card-body">
            <label for="body" class="label">Add a comment</label>
            <textarea id="body" name="body" class="textarea textarea-bordered w-full" rows="3" required>{{ old('body') }}</textarea>
            @error('body')
                <p class="text-error">{{ $message }}</p>
            @enderror
            <div class="card-actions justify-end">
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </div>
    </form>

    @foreach ($post->comments as $comment)
        <div class="card bg-base-300 shadow-sm my-2">
            <div class="card-body">
                <p>{{ $comment->body }}</p>
                <p class="text-base-content/50">{{ $comment->user->name }}</p>
            </div>
        </div>
    @endforeach
@endsection
