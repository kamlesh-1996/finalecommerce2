<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','category_id','slug','image'];

    //Muatore Set value of runtime
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = trim(strtolower($value));
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'category_id');
    }

}
