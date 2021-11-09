<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'contact', 'role', 'status', 'gender'];

    public function rolee(){

        return $this->belongsTo(Role::class, 'role');
    }
}
