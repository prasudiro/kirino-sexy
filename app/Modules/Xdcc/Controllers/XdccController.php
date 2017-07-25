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

	//index of kirino.sexy/Xdcc
	public function index()
	{
		$data = $this->module_api->ListData(array(), 'file_id', 'desc');

		return view($this->module."::index")
					 ->with('data', $data);
	}

}
