@extends('themes.eventually.index')

@section('title')
	Download File {{ $data['file_name']}} |
@endsection

@section('content')
<?php
 $folder   = strtolower(str_replace(" ", "-", $data['category_folder']));
 $category = str_replace(")", "", str_replace("(", "", substr($data['category_folder'], -4)));
 $unit     = substr($data['file_size'], -2);
 if ($unit == 'MB')
 {
	$data['file_size'] = str_replace('MB', ' MB', $data['file_size']);
 }
 else
 {
	$data['file_size'] = str_replace('GB', ' GB', $data['file_size']);
 }

 $type = $data["category_type"];
 if ($type == 0)
 {
 	$data["category_type"] = 'TV/WEB';
 }
 else
 {
 	$data["category_type"] = 'BD/DVD';
 }
?>

<header id="header" style="margin-bottom:20px;">
  <h1><b>Unduh Berkas Seksi</b></h1>
	  <h4><a style="border-bottom: 1px dotted white; cursor: pointer;" title="{{ $data["file_name"]}} ({{ $data["file_size"]}})">{{ $data["file_name"]}}</a></h4>
	  <br>
	  <h4><b>Informasi berkas:</b></h3>
	    <ul style="line-height:26px;">
	    <li><b>Anime:</b> <a title="{{ $data['category_name'].' ('.$category.')'}}" href="{{ secure_url('ddl/category/'.$data['category_id'].'/'.$folder)}}">{{ $data["category_folder"]}}</a></li>
	    <li><b>Ukuran:</b> {{ $data["file_size"]}}</li>
			<li><b>Tipe:</b> {{ $data["category_type"]}}</li>
	    <li><b>Download:</b> {{ $data["file_download"]}}</li>
	    </ul>
			<form class="" action="{{ secure_url('action/download?token='.base64_encode(date("ymdhis", strtotime("+2 days"))))}}" method="post">
				<input type="hidden" name="information" value="{{ base64_encode(json_encode($data))}}">
				<button type="submit" class="btn btn-warning btn-lg"><b>Download</b></button>
			</form>
</header>

@endsection
