<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class author extends Model
{
    use HasFactory;

    protected $fillable = ['name','firstName','lastName','birthDate'];

    public function books() {
       return $this->hasMany(Book::class);
    }
}