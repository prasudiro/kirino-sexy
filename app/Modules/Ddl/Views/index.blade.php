@extends('themes.eventually.eventually')

@section('content')

<div class="col-md-9" style="margin-left:-15px; margin-top: -40px">
<p class="col-md-3 col-md-push-9"><input id="pencarian" type="search" placeholder="Cari berkas" style="background: transparent; border-bottom: 1px solid white; border-top:0px; border-left:0px; border-right:0px; padding: 10px; margin-top: -30px; margin-bottom: 20px;" class="form-control" /></p>
	  <table class="table table-responsive footable" data-page-size="10000"" id="calls_table" data-sort="true" data-filtering="true" data-empty="Berkas tidak ditemukan" data-filter="#pencarian" style="width:100%; ">
      <tbody>
      @foreach ($data as $row)
	      <tr>
	      <?php
	       $unit = substr($row['file_size'], -2);
	       if ($unit == 'MB') 
	       {
	       	$size = str_replace('MB', ' MB', $row['file_size']);
	       }
	       else
	       {
	       	$size = str_replace('GB', ' GB', $row['file_size']);
	       }
	      ?>
	      	<td style="border: 0px;" width="10%">{{ $size}}</td>
	      	<td style="border: 0px;" width="90%">{{ $row['file_name']}}</td>
	      </tr>
			@endforeach
			</tbody>
      <tfoot>
</tfoot>
</table>
</div>

@endsection
