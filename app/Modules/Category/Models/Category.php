<?php namespace App\Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

	protected $table 				= "category";
	protected $primaryKey 	= "category_id";
	protected $guarded 			= array('category_id');

}
