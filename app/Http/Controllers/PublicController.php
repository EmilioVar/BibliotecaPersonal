<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PublicController extends Controller
{
    public function index() {
        //$books = Book::latest()->get();
        return view('welcome', compact('books'));
    }
}
