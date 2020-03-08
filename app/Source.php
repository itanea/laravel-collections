<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    // Fillable fields
    protected $fillable = ['name','order','comment'];

    // One source belong to one method
    public function methods()
    {
        $this->belongsTo(Method::class);
    }
}
