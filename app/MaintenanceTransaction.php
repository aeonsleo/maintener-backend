<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTransaction extends Model
{
    public function maintenance()
    {
        $this->belongsTo(Maintenance::class);
    }
}
