<?php namespace App\Modules\Ddl\Models;

use Illuminate\Database\Eloquent\Model;

class Ddl extends Model 
{

	protected $table 				= "file";
	protected $primaryKey 	= "file_id";
	protected $guarded 			= array('file_id');

}
