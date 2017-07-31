<?php namespace App\Modules\Xdcc\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use XdccApi;

class XdccController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	//set default rules
	public function __construct(Request $request)
	{
		$this->homepage			= config('setting.homepage');
	  $this->fansub_site	= config('setting.fansub_site');
	  $this->author				= config('setting.author');
	  $this->author_name	= config('setting.author_name');
  	$this->author_email	= config('setting.author_email');
	  $this->date_format	= config('setting.date_format');
	  $this->folder				= config('setting.folder');
	  $this->module       = 'Xdcc';
	  $this->module_api   = new XdccApi();
	}

	//redirect all errors route to 404
	public function errors()
	{
		return redirect('/')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti tautannya benar!</b>');
	}

	//index of kirino.sexy/Xdcc
	public function index()
	{
		$data = $this->module_api->ListCategory(array(), 'category_name', 'asc');

		return view($this->module."::index")
					 ->with('data', $data);
	}

	//list of files
	public function lists($id=0, $file="", $select="*")
	{
		$data 		= $this->module_api->ListData($select, array('file_category' => $id), 'file_name', 'asc');
		$category = $this->module_api->GetCategory(array('category_id' => $id));
		
		return view($this->module."::lists")
					 ->with('data', $data)
					 ->with('category', $category);
	}

}
