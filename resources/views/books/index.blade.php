<h1>Daftar Rak Buku</h1>

@if ($bookshelves->isEmpty())
    <p>Tidak ada rak buku.</p>
@else
    <ul>
        @foreach ($bookshelves as $bookshelf)
            <li>
                <a href="{{ route('books.show', $bookshelf->id) }}">
                    {{ $bookshelf->name }} ({{ $bookshelf->books_count ?? $bookshelf->books->count() }} buku)
                </a>
            </li>
        @endforeach
    </ul>
@endif