<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	
	protected $fillable = [
			'title'
	];
	
// 	protected $hidden = [
// 			'password', 'remember_token',
// 	];
}
