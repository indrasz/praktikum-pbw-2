<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'typeId',
        'license',
        'dailyPrice',
        'status'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'typeId', 'id');
    }

}
