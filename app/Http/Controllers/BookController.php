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
        $authors = Author::orderBy('name')->get();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request) {
        $book = Book::create([
            'title' => $request['title'],
            'pages' => $request['pages'],
            'year' => $request['year'],
            'editorial' => $request['editorial'],
            'where' => $request['where'],
            'category' => $request['category'],
            'vote' => $request['vote'],
            'comment' => $request['comment'],
        ]);
        Auth::user()->books()->save($book);
        return back();
    }
}
