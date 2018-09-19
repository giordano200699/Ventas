<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
	const UPDATED_AT = null;
	const CREATED_AT = null;

	protected $table = 'makers';

    protected $fillable = [
        'id','name', 'description'
    ];
}
