<?php namespace App\Modules\Api\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use ApiApi;

class ApiController extends Controller {

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
	  $this->module       = 'Api';
	  $this->module_api   = new ApiApi();
	}

	//index of kirino.sexy/Xdcc
	public function index()
	{
		$data = $this->module_api->ListData(array(), 'file_id', 'desc');

		return view($this->module."::index")
					 ->with('data', $data);
	}

	//index of kirino.sexy/Xdcc
	public function get_data(Request $request)
	{
		$valid_key = 'NmVlYTliN2VmMTkxNzlhMDY5NTRlZGQwZjZjMDVjZWI=';
		$r = $request->all();
		$encode_key = base64_encode(md5($r['key']));
		if ($valid_key != $encode_key)
		{
			return redirect('api')->with('msg', 'You provided the wrong key!');
		}

		$data = $this->module_api->GetData($r['send'], 'file_id', 'desc');

		echo json_encode($data, TRUE);
	}

}
