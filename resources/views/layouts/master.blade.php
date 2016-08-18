 <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="container-fluid">
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top back" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll heading" href="#page-top">Organsko meso</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="{{route('index')}}">Pocetna</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nar">Narudzbine</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recepti">Recepti</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#farme">Nase farme</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="{{route('contact')}}">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

      @yield('content')
      <div class="row foot" >
    <div id="bottom-nav" class="col-md-12">
      <ul>
        <li><a href="">Pocetna</a></li>
        <li><a href="">Recepti</a></li>
        <li><a href="">Narudzbine</a></li>
        <li><a href="">Naše farme</a></li>
        <li><a href="">Kontakt</a></li>
      </ul>
    </div>
  </div>