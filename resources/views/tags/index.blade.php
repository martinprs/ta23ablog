@extends('partials.layout')
@section('title', 'Tags')
@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold">Tags</h1>
        <a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif

    {{ $tags->links() }}
    <div class="bg-base-100 border border-base-content/5 rounded-box">
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tags as $tag)
                    <tr class="hover:bg-base-300">
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        <td>
                            <div class="join">
                                <a href="{{ route('tags.edit', $tag) }}" class="btn btn-warning join-item">Edit</a>
                                <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error join-item">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No tags found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $tags->links() }}
@endsection
