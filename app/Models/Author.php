<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Author Observer
     *
     * event - deleting
     *
     * info - Relationship with book delete on author delete
     **/

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::deleting(function ($model)
//        {
//            $model->books()->delete();
//        });
//    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
