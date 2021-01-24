<?php

namespace App\Models;

use App\Scopes\OrderScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["order"];

    public $translatedAttributes = ['title'];

    protected static function booted()
    {
        static::addGlobalScope(new OrderScope);
    }

}
