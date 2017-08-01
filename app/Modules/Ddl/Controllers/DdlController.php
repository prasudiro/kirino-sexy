<?php namespace App\Modules\Ddl\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DdlApi;
use File;

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

	//redirect all errors route to 404
	public function errors()
	{
		return redirect('/')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti tautannya benar!</b>');
	}

	//index of kirino.sexy/ddl
	public function index($select="*")
	{
		$data = $this->module_api->ListCategory($select, array(), 'category_name', 'asc');

		$path 		 = '/data1/upload';
		$file_size = 0;

			if(File::exists($path)) 
			{
		    foreach( File::allFiles($path) as $file)
		    {
		        $file_size += $file->getSize();
		    }
		    $file_size = $file_size;
			}

		$usage = $this->module_api->bytesToString($file_size);

		return view($this->module."::index")
					 ->with('data', $data)
					 ->with('usage', $usage);
	}

	//list of files
	public function lists($id=0, $file="", $select="*")
	{
		$data 		= $this->module_api->ListData($select, array('file_category' => $id), 'file_name', 'asc');
		$category = $this->module_api->GetCategory($select, array('category_id' => $id));

		$path 		 = '/data1/upload/'.$category['category_folder'];
		$file_size = 0;

			if(File::exists($path)) 
			{
		    foreach( File::allFiles($path) as $file)
		    {
		        $file_size += $file->getSize();
		    }
		    $file_size = $file_size;
			}

		$usage = $this->module_api->bytesToString($file_size);

		return view($this->module."::lists")
					 ->with('data', $data)
					 ->with('category', $category)
					 ->with('usage', $usage);
	}

	//detail file of kirino.sexy/ddl/id
	public function show($id="", $file="", $select="*")
	{
		$conditions = array("file_id" => $id);
		$data 			= $this->module_api->GetData($select, $id, $file, $conditions, 'file_name', 'asc');

		if (!isset($_SERVER['HTTP_REFERER']))
		{
			return redirect('/')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		$referer = stripos($_SERVER['HTTP_REFERER'], 'moesubs.com');
		if ($referer == FALSE)
		{
			return redirect('/')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		if (count($data)==0)
		{
			return redirect('/')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti tautannya benar!</b>');
		}

		return view($this->module."::detail")
					 ->with('data', $data);
	}

	//get download file
	public function download(Request $request)
	{

		if (!isset($_SERVER['HTTP_REFERER']))
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		$referer = stripos($_SERVER['HTTP_REFERER'], 'kirino');
		if ($referer == FALSE)
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		if (!isset($_GET['token']))
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti boleh Hotlinking!</b>');
		}

		$token   = base64_decode($_GET['token']);
		$expired = date("ymdhis");
		if ($token < $expired)
		{
			return redirect('ddl')->with('msg_error', '<b style="line-height:30px;">BA-BAKA! Bukan berarti tiketnya kedaluwarsa!</b>');
		}

		$information 	 = json_decode(base64_decode($request['information']), TRUE);
		$file_location = '/data1/upload/'.$information['category_folder'].'/'.$information['file_name'];

		// $headers = array(
		//    'Content-Type: application/octet-stream',
		//    'Content-Length: '. filesize($file_location)
		// );

		return redirect('http://kousaka.kirino.sexy/'.$information['category_folder'].'/'.$information['file_name']);
		// return response()->download($file_location, basename($file_location), $headers);
	}

}
