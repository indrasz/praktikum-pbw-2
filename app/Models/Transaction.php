<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'vehicleId',
        'startDate',
        'endDate',
        'price',
        'status'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicleId', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
