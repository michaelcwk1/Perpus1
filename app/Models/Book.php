<?php

namespace App\Models;


use App\Models\ImageBook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ImageBook::class);
    }
}
