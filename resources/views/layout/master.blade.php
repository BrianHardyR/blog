<!doctype html>
<html lang='en'>
<head>
  @include('layout.meta')
  @include('layout.head')
  <title>My Blog - @yield('suf-title')</title>
</head>
<body class="text-center">
  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
  	
	    @include('layout.header')
	    <main role="main" class="inner cover">
	    	@yield('content')
		</main>
	    @include('layout.footer')
	
  </div> 
</body>
</html>
