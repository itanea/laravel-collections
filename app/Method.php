<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    // Fillable fields
    protected $fillable = ['name','description','collections'];

    // One method has many sources
    public function sources()
    {
        return $this->hasMany(Source::class);
    }
}
