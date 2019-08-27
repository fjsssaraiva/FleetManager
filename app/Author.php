<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['first_name', 'last_name'];
	
	public function vehiclemodels()
      {
        return $this->hasMany(VehicleModel::class);
      }
}
