<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driveh extends Model
{
    use HasFactory;
    //id             


    protected $fillable = ['vehicle','driver','starting_odometer','starting_date','comments'];
}
