<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/legal1.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/legal.css') }}" type="text/css">
  <title>Document</title>

  <script>
        window.laravel = {!! json_encode([
            'csrf' => csrf_token(),
            'pusher' =>[
                   'key' => config('broadcasting.connections.pusher.key'),
                   'cluster' => config('broadcasting.connections.pusher.options.cluster'),
            ]
        ]) !!}
    </script>
</head>
<body>
  <div class="app">
<header>
		<h1>3D Carousel Using TweenMax.js & jQuery</h1>
		<h3>A pen by <a href="https://www.twitter.com/johnblazek" target="_blank">@johnblazek</a></h3>
		<div id="fps">Framerate: 0/60 FPS</div>
	</header>
	
	<div id="contentContainer" class="trans3d"> 
	<section id="carouselContainer" class="trans3d">
		<figure id="item1" class="carouselItem trans3d"><div class="carouselItemInner trans3d">1</div></figure>
		<figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d">2</div></figure>
		<figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d">3</div></figure>
		<figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d">4</div></figure>
		<figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d">5</div></figure>
		<figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d">6</div></figure>
		<figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d">7</div></figure>
		<figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d">8</div></figure>
		<figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d">9</div></figure>
		<figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d">10</div></figure>
		<figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d">11</div></figure>
		<figure id="item12" class="carouselItem trans3d"><div class="carouselItemInner trans3d">12</div></figure>	
	</section>
	</div>

    <script type="text/javascript" src="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/js/libs.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main1.js')}}"></script>
    </div>
  </body>
</html>