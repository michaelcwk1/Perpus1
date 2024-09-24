<!-- resources/views/books/index.blade.php -->
@extends('layouts.app')

@section('title', 'Book List')

@section('content')
    <h1 class="text-3xl font-bold mb-8">Our Book Collection</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($books as $book)
            <x-book-card :book="$book" />
        @endforeach
    </div>

    <div class="mt-8">
        {{ $books->links() }}
    </div>
@endsection
