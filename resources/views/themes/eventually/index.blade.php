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
		{{-- <script src="{{ url('assets/js/sexy.js')}}"></script> --}}

		<script>

		//Foottable
		jQuery(function($){
			$('.footable').footable();
		});

		//Modal for xdcc
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

		//Slideshow background
		(function() {

	"use strict";

	// Methods/polyfills.

		// classList | (c) @remy | github.com/remy/polyfills | rem.mit-license.org
			!function(){function t(t){this.el=t;for(var n=t.className.replace(/^\s+|\s+$/g,"").split(/\s+/),i=0;i<n.length;i++)e.call(this,n[i])}function n(t,n,i){Object.defineProperty?Object.defineProperty(t,n,{get:i}):t.__defineGetter__(n,i)}if(!("undefined"==typeof window.Element||"classList"in document.documentElement)){var i=Array.prototype,e=i.push,s=i.splice,o=i.join;t.prototype={add:function(t){this.contains(t)||(e.call(this,t),this.el.className=this.toString())},contains:function(t){return-1!=this.el.className.indexOf(t)},item:function(t){return this[t]||null},remove:function(t){if(this.contains(t)){for(var n=0;n<this.length&&this[n]!=t;n++);s.call(this,n,1),this.el.className=this.toString()}},toString:function(){return o.call(this," ")},toggle:function(t){return this.contains(t)?this.remove(t):this.add(t),this.contains(t)}},window.DOMTokenList=t,n(Element.prototype,"classList",function(){return new t(this)})}}();

		// canUse
			window.canUse=function(p){if(!window._canUse)window._canUse=document.createElement("div");var e=window._canUse.style,up=p.charAt(0).toUpperCase()+p.slice(1);return p in e||"Moz"+up in e||"Webkit"+up in e||"O"+up in e||"ms"+up in e};

		// window.addEventListener
			(function(){if("addEventListener"in window)return;window.addEventListener=function(type,f){window.attachEvent("on"+type,f)}})();

	// Vars.
		var	$body = document.querySelector('body');

	// Disable animations/transitions until everything's loaded.
		$body.classList.add('is-loading');

		window.addEventListener('load', function() {
			window.setTimeout(function() {
				$body.classList.remove('is-loading');
			}, 100);
		});

	// Slideshow Background.
		(function() {

			// Settings.
				var settings = {

					// Images (in the format of 'url': 'alignment').
						images: {
							// 'assets/images/bg01.jpg': 'center',
							@for ($i = 2; $i < 17; $i++)
								'{{ url('assets/images/bg'.$i.'.jpg')}}': 'center',
							@endfor
						},

					// Delay.
						delay: 3500

				};

			// Vars.
				var	pos = 0, lastPos = 0,
					$wrapper, $bgs = [], $bg,
					k, v;

			// Create BG wrapper, BGs.
				$wrapper = document.createElement('div');
					$wrapper.id = 'bg';
					$body.appendChild($wrapper);

				for (k in settings.images) {

					// Create BG.
						$bg = document.createElement('div');
							$bg.style.backgroundImage = 'url("' + k + '")';
							$bg.style.backgroundPosition = settings.images[k];
							$wrapper.appendChild($bg);

					// Add it to array.
						$bgs.push($bg);

				}

			// Main loop.
				$bgs[pos].classList.add('visible');
				$bgs[pos].classList.add('top');

				// Bail if we only have a single BG or the client doesn't support transitions.
					if ($bgs.length == 1
					||	!canUse('transition'))
						return;

				window.setInterval(function() {

					lastPos = pos;
					pos++;

					// Wrap to beginning if necessary.
						if (pos >= $bgs.length)
							pos = 0;

					// Swap top images.
						$bgs[lastPos].classList.remove('top');
						$bgs[pos].classList.add('visible');
						$bgs[pos].classList.add('top');

					// Hide last image after a short delay.
						window.setTimeout(function() {
							$bgs[lastPos].classList.remove('visible');
						}, settings.delay / 2);

				}, settings.delay);

		})();
		})();

		</script>

	</body>
</html>
