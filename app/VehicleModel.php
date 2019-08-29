<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
	protected $fillable = ['title', 'photo', 'engine', 'maxpower', 'fuel', 'author_id'];
	
	public function author()
      {
		return $this->belongsTo(Author::class, 'author_id');
      }
}
