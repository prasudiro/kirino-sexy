@extends('themes.eventually.index')

@section('title')
	Download File |
@endsection

@section('content')

<header id="header" style="margin-bottom:20px;">
  <h1><b>Unduh Berkas Seksi</b></h1>
  <h4>{{ $data["file_name"]}}</h4>
  <br>
  <h4><b>Sepenggal Biodata:</b></h3>
    <ul style="line-height:26px;">
    <li>Intel Core i7-3930</li>
    <li>4x RAM 8192 MB DDR3</li>
    <li>1x SSD 60 GB SATA</li>
    <li>2x HDD 3,0 TB SATA</li>
    <li>RAID Controller 4-Port SATA PCI-E</li>
    <li>LSI MegaRAID SAS 9260-4i</li>
    <li>NIC 1 Gbit (Intel EXPI9301CT)</li>
    </ul>
</header>

@endsection
