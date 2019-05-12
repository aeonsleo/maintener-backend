<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTransaction extends Model
{
    protected $fillable = [
        'scheduled_date',
        'transaction_date',
        'amount'
    ];

    public function maintenance()
    {
        $this->belongsTo(Maintenance::class);
    }
}
