<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
	protected $guarded = [];

	public function contents() {
		return $this->hasMany('App\Content');
	}

}