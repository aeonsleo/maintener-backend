<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'name',
        'frequency',
        'description'
    ];
    
    public function transactions()
    {
        return $this->hasMany('App\MaintenanceTransaction');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
