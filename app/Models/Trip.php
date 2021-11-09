<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;


    protected $fillable = ['trip_code', 'from', 'to', 'date_of_trip', 'return_date', 'purpose', 'status', 'vehicle'];


    public function vehice(){

        return $this->belongsTo(Vehicle::class, 'vehicle');
    }

    public function loc_from(){

        return $this->belongsTo(Location::class, 'from');
    }

    public function loc_to(){

        return $this->belongsTo(Location::class, 'to');
    }
    
}
