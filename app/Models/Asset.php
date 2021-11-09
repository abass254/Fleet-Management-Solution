<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssetType;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['item_code', 'item_name', 'item_desc', 'status', 'item_type', 'date_purchased', 'purchase_price'];


    public function type(){

        return $this->belongsTo(AssetType::class, 'item_type');
    }
}
