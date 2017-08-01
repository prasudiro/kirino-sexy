<?php

class DdlApi
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
	function ListData($select="*", $conditions=array(), $order_column='file_id', $order_type='asc')
	{
		$model  = $this->model;
		$data 	= $model::select($select)
										->where($conditions)
										->where($this->table.'.deleted', '=', 0)
										->orderBy($order_column, $order_type)
										->get()
										->toArray();

		return $data;
	}

	//list all category
	function ListCategory($select="*", $conditions=array(), $order_column='file_id', $order_type='asc')
	{
		$model  			  = $this->model;
		$model_category = $this->model_category;

		$data 	= $model_category::select($select)
														 ->where($conditions)
														 ->where($this->table_category.'.deleted', '=', 0)
														 ->orderBy($order_column, $order_type)
														 ->get()
														 ->toArray();

		return $data;
	}

	//get single data
	function GetData($select="*", $id="", $file="", $conditions, $order_column="file_id", $order_type="asc")
	{
		$model  				= $this->model;
		$model_category = $this->model_category;

		$data 	= $model::select($select)
										->leftjoin("category", "category.category_id", "=", $this->table.".".$this->table."_category")
										->where($this->table.'.deleted', '=', 0)
										->where($conditions)
										->orderBy($order_column, $order_type)
										->first();

		 $name = strtolower(str_replace("'", "", str_replace(" ", "-", $data['file_name'])));

		 if (!isset($data['file_download']))
		 {
		 	return $data;
		 }

		 if ($name == $file)
		 {
		 	$data['file_slug'] 		= $name;
			$get_file_download 		= array('file_download' => $data['file_download'] + 1);
			$update_file_download = $model::where('file_id', '=', $id)->update($get_file_download);
		 }
		 else
		 {
		 	$data = array();
		 }

		return $data;
	}

	//get single category for title etc
	function GetCategory($select="*", $conditions=array())
	{
		$model  				= $this->model;
		$model_category = $this->model_category;

		$data 	= $model_category::select($select)
														 ->where($conditions)
														 ->where($this->table_category.'.deleted', '=', 0)
														 ->first();

		return $data;
	}

	//convert bytes to kb, mb, gb
	function bytesToString($total_size)
	{
    if ($total_size < 1024) //dealing with bytes
            return $total_size . " bytes";
    elseif ($total_size < 1048576) //dealing with kilobytes
            return round($total_size/1024, 2) . " KB";
    elseif ($total_size < 1073741824) //dealing with megabytes
            return round($total_size/1048576, 2) . " MB";
    elseif ($total_size >= 1073741824) //dealing with gigabytes
            return round($total_size/1073741824, 2) . " GB";
	}

}
