<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bookshelf;

class Book extends Model
{
    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id', 'id');
    }   
}