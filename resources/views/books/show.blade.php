<h2>Daftar Buku</h2>

@forelse ($bookshelf->books as $book)
    <div>
        <p>ID : {{ $book->id }}</p>
        <p>Judul : {{ $book->title }}</p>
        <p>Pengarang : {{ $book->author }}</p>
    </div>
@empty
    <div>Buku Kosong!</div>
@endforelse