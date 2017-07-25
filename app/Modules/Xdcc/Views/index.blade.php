@extends('themes.eventually.index')

@section('content')

<div class="col-md-9" style="margin-left:-45px; margin-top: -40px">
<p class="col-md-3 col-md-push-9"><input id="pencarian" type="search" placeholder="Cari berkas" style="background: transparent; border-bottom: 1px solid white; border-top:0px; border-left:0px; border-right:0px; padding: 10px; margin-top: -25px; margin-bottom: 20px; color: #aaaaaa" class="form-control" /></p>
	  <table class="table table-responsive footable" data-page-size="10000" id="calls_table" data-sort="true" data-filtering="true" data-empty="Berkas tidak ditemukan" data-filter="#pencarian" style="width:100%; ">
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
	      	<td style="border: 0px;" width="10%" class="text-right">#{{ $row['file_id']}}</td>
	      	<td style="border: 0px;" width="10%" class="text-right">{{ $size}}</td>
	      	<td style="border: 0px;" width="80%"><a data-toggle="modal" data-target="#myModal{{ $row['file_id']}}" style="cursor: pointer;">{{ $row['file_name']}}</a></td>
	      </tr>
			@endforeach
			</tbody>
      <tfoot>
</tfoot>
</table>
</div>
@foreach($data as $row2)

	<div class="modal fade" id="myModal{{ $row2['file_id'] }}" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
					<center>
						<input type="text" onfocus="this.select();" onmouseup="return false;" value="/MSG Kirino-Sexy XDCC SEND {{ $row2['file_id']}}" style="color:#555555; border: 0px; text-align: center;" />
					</center>
				</div>
			</div>
		</div>
	</div>

@endforeach

@endsection
