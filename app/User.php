<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $table = "table_name";
	protected $primaryKey = 'userId';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
