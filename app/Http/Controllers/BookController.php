<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index () {
        $books = Book::latest()->paginate(6);
        return view ('index', compact('books'));
    }

    public function store (BookRequest $request) {

        $messages = [
            'title.required' => 'el campo título es obligatorio',
            'title.unique' => 'el título ya está registrado'
        ];

        if($request->file('img')) {
            $img = Storage::url($request->file("img")->store("public/img"));
        } else {
            $img = 'storage/img/rple4ZaXDCrfqqLexcJ2qQXDrCE5fasV4wAcaNBR.jpg';
        }

        $newBook = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'editorial' => $request->editorial,
            'pages' => $request->pages,
            'opinion' => $request->opinion,
            'votation' => $request->votation,
            'img' => $img
        ], $messages);

        /* $newBook = $request->validate([
            'title' => ['required','unique:books'],
            'author' => 'max:255',
            'editorial' => 'max:255',
            'pages' => '',
            'opinion' => 'max:1000',
            'votation' => 'max:5',
            'img' => $img
        ], $messages); */

        /* Book::create($newBook); */

        $newBook->saveOrFail();

        return redirect( route ('index'))->with('success', '<div class="alert alert-success"> Cargado correctamente! </div>');
    }
}
