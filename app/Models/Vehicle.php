<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    //id                                     


    protected $fillable = ['name', 'year'  ,  'selling_price',   'km_driven' ,  'fuel'   , 'seller_type', 'transmission'  ,  'owner'  , 'mileage' ,'engine' , 'max_power'  , 'torque'  ,'seats'  , 'image', 'colour'];

    public function trip(){

        return $this->hasMany(Trip::class);
    }

    public function veh_type(){

        return $this->belongsTo('App\Models\Type', 'vehicle_type');
    }


    public function brd(){

        return $this->belongsTo(Brand::class, 'brand');
    }

}
