<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    
    public function transactions()
    {
        return $this->hasMany('App\MaintenanceTransaction');
    }
}
