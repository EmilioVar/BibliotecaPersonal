<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index () {
        $books = Book::latest()->get();
        return view ('index', compact('books'));
    }

    public function store (Request $request) {
        $newBook = $request->validate([
            'title' => 'required|max:255',
            'author' => 'max:255',
            'editorial' => 'max:255',
            'pages' => '',
            'opinion' => 'max:1000',
            'votation' => 'max:5'
        ]);

        Book::create($newBook);

        return redirect( route ('index'))->with('success', 'enviado correctamente!');
    }
}