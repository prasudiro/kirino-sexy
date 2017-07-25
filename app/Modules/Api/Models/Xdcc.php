<?php namespace App\Modules\Api\Models;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{

	protected $table 				= "file";
	protected $primaryKey 	= "file_id";
	protected $guarded 			= array('file_id');

}
