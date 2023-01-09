<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\author;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function create() {
        $books = Book::orderBy('title')->get();
        $authors = Author::orderBy('name')->get();
        return view('books.create', compact('authors','books'));
    }

    public function store(Request $request) {
        //FIXME: eso no vale para nada, pero para algo servirá
        if (Auth::user()->books()->where('title', $request['title'])->exists()) {
            dd('si existe');
        }

        $book = Book::create([
            'title' => $request['title'],
            'author_id' => $request['author_id'],
            'pages' => $request['pages'],
            'year' => $request['year'],
            'editorial' => $request['editorial'],
            'where' => $request['where'],
            'category' => $request['category'],
            'vote' => $request['vote'],
            'comment' => $request['comment'],
        ]);
        Auth::user()->books()->save($book);
        return back()->with('bookCreated', '¡libro cresdfgsdfgado correctamente!');
    }
}
