<?php namespace App\Modules\Xdcc\Models;

use Illuminate\Database\Eloquent\Model;

class Xdcc extends Model
{

	protected $table 				= "file";
	protected $primaryKey 	= "file_id";
	protected $guarded 			= array('file_id');

}
