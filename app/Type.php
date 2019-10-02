<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";
    protected $fillable = ['type_name', 'chargePerHour'];
    
    public function staffs()
    {
        return $this->hasMany('App\Staff');
    }
}
