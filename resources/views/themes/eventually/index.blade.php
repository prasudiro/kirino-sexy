<html>
	<head>
		<title>@yield('title') Kirino Sexy - Adik Perempuan Seksi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" type="image/icon" href="{{ url('assets/images/favicon_001.jpg') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
		<link rel="stylesheet" href="{{ url('assets/css/addon.css') }}" />
		<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/css/footable.core.css') }}"> --}}

    <style type="text/css" media="screen">
    	::-webkit-scrollbar
			{
			  width: 12px;  /* for vertical scrollbars */
			  height: 12px; /* for horizontal scrollbars */
			}

			::-webkit-scrollbar-track
			{
			  background: rgba(0, 0, 0, 0.1);
			}

			::-webkit-scrollbar-thumb
			{
			  background: rgba(255, 255, 255, .2);
			}
			input[type="search"]::-webkit-search-cancel-button {
			    -webkit-appearance: searchfield-cancel-button;
			  }
			.modal-backdrop {
				z-index: 1 !important;
			}
			.modal-content {
				width:300px !important;
			}

    </style>

	</head>

	<body>

		<div>
				@include('themes.eventually.html.menu')
		</div>

		<div>
				@yield('content')
		</div>

		<nav class="navbar navbar-inverse navbar-fixed-bottom" style="padding:50px; background:transparent; border:0px;">
				@include('themes.eventually.html.footer')
		</nav>

		<!-- Scripts -->
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="{{ url('assets/js/footable.all.min.js')}}"></script>
		<script src="{{ url('assets/js/sexy.js')}}"></script>

		<script>
		jQuery(function($){
			$('.footable').footable();
		});

		$(".modalbttn").click(function() {
	  $(".modalcontainer").fadeIn("slow");
	  $(".modal").fadeIn("slow");
		});

		$(".close").click(function() {
		  $(".modalcontainer").fadeOut("slow");
		  $(".modal").fadeOut("slow");
		});

		$(".buttons").click(function() {
		  $(".modalcontainer").fadeOut("slow");
		  $(".modal").fadeOut("slow");
		});
		</script>

	</body>
</html>
