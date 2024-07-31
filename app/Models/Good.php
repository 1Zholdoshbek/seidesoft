<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $guarded=false;


    public function stocks(){
        return $this->belongsToMany(Stock::class, 'good_stocks', 'good_id', 'stock_id')->withPivot('count');
    }

    public function characteristics(){
        return $this->belongsToMany(Characteristic::class,'good_characteristics', 'good_id', 'characteristic_id')->withPivot('value');
    }


}
