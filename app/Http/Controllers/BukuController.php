<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;

class BukuController extends Controller
{
    public function index()
    {
        $bookshelves = Bookshelf::withCount('books')->get();
        return view('books.index', compact('bookshelves'));
    }
    
    public function show($id)
    {
        $bookshelf = Bookshelf::with('books')->findOrFail($id);
        return view('books.show', compact('bookshelf'));
    }
}