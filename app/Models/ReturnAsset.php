<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnAsset extends Model
{
    use HasFactory;

    protected $fillable = ['asset', 'date_returned', 'comments', 'condition', 'collected_by'];


}
