<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
	protected $fillable = ['title', 'photo', 'engine', 'maxpower', 'fuel', 'author_id'];
}
