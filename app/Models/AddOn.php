<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    protected $fillable = ['name'];
    public function variations()
    {
        return $this->hasMany(Variation::class, 'addon_id','id');
    }
}
