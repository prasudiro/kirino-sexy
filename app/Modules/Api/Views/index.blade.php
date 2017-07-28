@extends('themes.eventually.index')

@section('content')

<div class="col-md-6">
	@if(Session::has('msg'))
<h2 class="label label-danger">
	{{ Session::get('msg') }}
</h2>
@endif
	<form class="form-control" action="{{ secure_url('api/get_data')}}" method="post" style="background: transparent; border:0px;">
		<input type="text" name="send" placeholder="Data search" class="form-control" style="color: #aaaaaa">
		<input type="text" name="key" placeholder="Api Key" class="form-control" style="color: #aaaaaa">
		<button type="submit" class="form-control btn btn-warning">Submit</button>
	</form>
</div>

@endsection
