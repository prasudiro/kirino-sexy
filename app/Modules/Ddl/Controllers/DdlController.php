<?php namespace App\Modules\Ddl\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DdlApi;

class DdlController extends Controller {

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
	  $this->module       = 'Ddl';
	  $this->module_api   = new DdlApi();
	}

	//index of kirino.sexy/ddl
	public function index()
	{
		$data = $this->module_api->ListData(array(), 'file_name', 'asc');

		return view($this->module."::index")
					 ->with('data', $data);
	}

	//detail file of kirino.sexy/ddl/id
	public function show($id)
	{
		if (!isset($_SERVER['HTTP_REFERER']))
		{
			return redirect('ddl')->with('error', 'BA-BAKA! Hotlinking is not allowed!');
		}

		$referer = stripos($_SERVER['HTTP_REFERER'], 'moesubs.com');
		if ($referer == TRUE)
		{
			echo "ok";
		}
		else
		{
			echo "salah";
		}
		exit();
		$data = $this->module_api->GetData(array('file_id' => $id), 'file_name', 'asc');

		return view($this->module."::detail")
					 ->with('data', $data);
	}

}
