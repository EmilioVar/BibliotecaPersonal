<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class book extends Model
{
    use HasFactory;

    protected $fillable = ['title','pages','year','editorial','where','category','vote','comment'];

    public function author() {
       return $this->belongsTo(Author::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, "books_users_pivot");
    }
}
