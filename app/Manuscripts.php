<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscripts extends Model
{
	protected $table 		= 'Manuscripts';
	protected $primaryKey 	= 'id';
    protected $fillable = [
        
        'user_id', 'path','code','name'
    ];
}
