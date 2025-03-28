<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name', 'slug', 'is_active'];



    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

}
