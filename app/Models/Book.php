<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);


    }


    public function author()
{
    return $this->belongsTo(Author::class);
}

}


