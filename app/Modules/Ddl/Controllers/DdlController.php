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
	public function show($id="", $file="")
	{
		$conditions = array("file_id" => $id);
		$data 			= $this->module_api->GetData($id, $file, $conditions, 'file_name', 'asc');

		if (!isset($_SERVER['HTTP_REFERER']))
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		$referer = stripos($_SERVER['HTTP_REFERER'], 'moesubs.com');
		if ($referer == FALSE)
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		if (count($data)==0)
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti tautannya benar!</b>');
		}

		return view($this->module."::detail")
					 ->with('data', $data);
	}

}
