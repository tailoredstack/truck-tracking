<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'truck';

    protected $fillable = [
        'color',
        'manufacturer',
        'no_of_wheels',
        'plate_no',
        'type',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/trucks/'.$this->getKey());
    }
}
