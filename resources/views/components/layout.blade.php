<!DOCTYPE html>
<html lang="en">
<head>
    <title>KJPP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="d-flex flex-column">
			<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
            <li>
	            <a href="/">Home</a>
	        </li> 
	        <li>
	          <a href="/penawaran">Penawaran</a>
	        </li>
	        <li>
              <a href="/penilaian">Penilaian</a>
	        </li>
	        </ul>

	        <div class="footer">
                <div class="mt-auto text-center p-3">
	        	      <p>
					          Copyright &copy;<script>document.write(new Date().getFullYear());</script>This website is made with <i class="bi bi-balloon-heart-fill"></i></i> by <a href="#" target="_blank">andre</a>
				          </p>
                </div>
	        </div>

	      </div>
    	</nav>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <h2>
        
      </h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penawaran">Penawaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penilaian">Penilaian</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>  

        <div class="mt-4">
           @yield('content')
        </div>  

      </div>
    </div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>