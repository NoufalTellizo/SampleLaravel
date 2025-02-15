<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    protected $fillable =['name','servicetype_id','price','batch_id'];

    public function servicetype()
    {
        return $this->belongsTo(ServiceType::class,'servicetype_id','id');
    }
}
