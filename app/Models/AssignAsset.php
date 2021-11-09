<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignAsset extends Model
{
    use HasFactory;

    protected $fillable = ['staff', 'item', 'date_issued', 'status', 'comments'];


    public function stafff(){

        return $this->belongsTo(Staff::class, 'staff');
    }

    public function itemm(){

        return $this->belongsTo(Asset::class, 'item');
    }
}
