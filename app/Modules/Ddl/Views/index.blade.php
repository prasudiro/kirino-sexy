@extends('themes.eventually.index')

@section('title')
	DDL |
@endsection

@section('content')

<div class="col-md-9" style="margin-left:-25px; margin-top: -40px">
<p class="col-md-3 col-md-push-9"><input id="pencarian" type="search" placeholder="Cari berkas" style="background: transparent; border-bottom: 1px solid white; border-top:0px; border-left:0px; border-right:0px; padding: 10px; margin-top: -25px; margin-bottom: 20px; color: #aaaaaa" class="form-control" /></p>
<p class="col-md-12">
	<span class="text-muted">
		<b class="text-muted">Total:</b>  {{ count($data)}} map ({{ $usage}})
	</span>
</p>
	  <table class="table table-responsive footable" data-page-size="10000" id="calls_table" data-sort="true" data-filtering="true" data-empty="Berkas tidak ditemukan" data-filter="#pencarian" style="width:100%; ">
      <tbody>
      <?php $no = 1; ?>
      @foreach ($data as $row)
	      <tr>
	      <?php
	        $category = str_replace(")", "", str_replace("(", "", substr($row['category_folder'], -4)));
					$type 	  = $row["category_type"];
					$folder   = strtolower(str_replace(" ", "-", $row['category_folder']));
					if ($type == 0)
					{
						$row["category_type"] = '[TV/WEB]';
					}
					else
					{
						$row["category_type"] = '[BD/DVD]';
					}
	      ?>
	      	<td style="border: 0px;" width="5%" class="text-right">{{ $no }}</td>
	      	<td style="border: 0px;" width="10%" class="text-center">({{ $category}})</td>
	      	<td style="border: 0px;" width="90%"><a href="{{ secure_url('ddl/category/'.$row['category_id'].'/'.$folder)}}">{{ $row['category_name']}}</a></td>
	      </tr>
	    <?php $no++; ?>
			@endforeach
			</tbody>
      <tfoot>
</tfoot>
</table>
</div>



@endsection
