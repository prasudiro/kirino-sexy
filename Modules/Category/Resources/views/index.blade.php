@extends('themes.eventually.eventually')

@section('content')

<div class="col-md-6">

      @foreach($data as $row)
        <a href="{{ url('category') }}/{{ strtolower(str_replace(' ', '-', $row['category_name'])) }}" title="{{ $row['category_name']}}">{{ $row['category_name'] }}</a><br>
      @endforeach
</div>

@stop
