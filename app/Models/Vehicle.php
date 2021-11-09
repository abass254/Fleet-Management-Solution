<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    //id                                     


    protected $fillable = ['brand','model','vehicle_type','purchase_date','chassis_no','engine_no','plate_no','insurance_company','policy_no','colour','image',];

    public function trip(){

        return $this->hasMany(Trip::class);
    }

    public function veh_type(){

        return $this->belongsTo(Type::class, 'vehicle_type');
    }


    public function brd(){

        return $this->belongsTo(Brand::class, 'brand');
    }

}
