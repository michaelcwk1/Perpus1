<!-- resources/views/components/book-card.blade.php -->
@props(['book'])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <img src="{{ $book->cover_image }}" alt="{{ $book->title }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
        <p class="text-sm text-gray-600 mb-4">{{ Str::limit($book->description, 100) }}</p>
        <div class="flex justify-between items-center">
            <a href="{{ route('books.show', $book->id) }}" class="text-blue-600 hover:underline">Details</a>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Borrow</button>
        </div>
    </div>
</div>