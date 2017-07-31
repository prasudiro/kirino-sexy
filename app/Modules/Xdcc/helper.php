<?php

class XdccApi
{
	//call all available model
	var $model 					= 'App\Modules\Ddl\Models\Ddl';
	var $model_category = 'App\Modules\Category\Models\Category';

	//call current raw table
	var $table 					= 'file';
	var $table_category = 'category';
	var $module   			= 'Ddl';

	//call all additional config on config/settings.php
	public function __construct()
	{
		$this->homepage			= config('setting.homepage');
	  $this->fansub_site	= config('setting.fansub_site');
	  $this->author				= config('setting.author');
	  $this->author_name	= config('setting.author_name');
  	$this->author_email	= config('setting.author_email');
	  $this->date_format	= config('setting.date_format');
	  $this->folder				= config('setting.folder');
	}

	//list all data
	function ListData($select=array("*"), $conditions=array(), $order_column='file_id', $order_type='asc')
	{
		$model  = $this->model;
		$data 	= $model::select($select)
										->where($this->table.'.deleted', '=', 0)
			              ->where($conditions)
										->orderBy($order_column, $order_type)
										->get()
										->toArray();
		// echo "<pre>"; print_r($data); exit();
		return $data;
	}

	//list all category
	function ListCategory($conditions=array(), $order_column='file_id', $order_type='asc')
	{
		$model  			  = $this->model;
		$model_category = $this->model_category;

		$data 	= $model_category::where($conditions)
														 ->where($this->table_category.'.deleted', '=', 0)
														 ->orderBy($order_column, $order_type)
														 ->get()
														 ->toArray();

		return $data;
	}

	//get single category for title etc
	function GetCategory($conditions)
	{
		$model  				= $this->model;
		$model_category = $this->model_category;

		$data 	= $model_category::where($conditions)
														 ->where($this->table_category.'.deleted', '=', 0)
														 ->first();

		return $data;
	}

}
