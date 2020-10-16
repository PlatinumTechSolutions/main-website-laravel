<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('meta_description', 'Platinum Tech Solutions')" />
    <meta name="keywords" content="@yield('meta_keywords', 'PHP, Symfony, ElasticSearch, AWS, Security Consultants')" />
    <meta name="author" content="@yield('meta_author', 'Platinum Tech Solutions Limited')" />

    <title>@yield('section', 'Platinum Tech Solutions')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Style -->
    <link href="/css/style.css" rel="stylesheet" />

  </head>
  <body>

    <div id="brand">
      <div class="logo">
        <a class="brand" href="/">
          <h1>Platinum</h1>
          <h2>- Tech Solutions -</h2>
        </a>
      </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      &nbsp;
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        MENU
      </button>
      &nbsp;

      <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="url('/contact')">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

@yield('bodyHeader')
    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-center">@yield('bodyHeaderText')</h1>
          </div>
        </div>
      </div>
    </section>
@show

@yield('body')

@section('footerCTA')
    <section class="footer-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h3 class="align-middle">Want to discuss a project or say hello?</h3>
          </div>
          <div class="col-lg-4">
            <h3 class="align-middle"><a href="#" class="btn btn-lg btn-info">contact us</a></h3>
          </div>
        </div>
      </div>
    </section>
@show

    <a id="back-to-top-button"></a>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 left-column">
            <h3>Contact Us</h3>
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <h4>Telephone</h4>
                <p><a href="tel:+447905323168">+44 (0) 7905 323 168</a></p>
              </div>
              <div class="col-lg-8 col-md-6">
                <h4>Address</h4>
                <p>The Grove<br />20 Broad Walk<br />Hockley<br />Essex, SS5 5DD</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 right-column">
            <h3>Looking for something else?</h3>
            <div class="row">
              <div class="col-lg-4 col-md-6 products-column">
                <nav>
                  <h4><a href="{{ url('/projects') }}">Projects</a></h4>
                  <ul class="menu">
                    <li><a href="{{ url('/projects') }}#AWS">AWS</a></li>
                    <li><a href="{{ url('/projects') }}#ElasticSearch">ElasticSearch</a></li>
                    <li><a href="{{ url('/projects') }}#GDPR">GDPR</a></li>
                    <li><a href="{{ url('/projects') }}#Symfony">Symfony</a></li>
                    <li><a href="{{ url('/projects') }}#WordPress">WordPress</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-lg-4 col-md-6 services-column">
                <nav>
                  <h4>Services</h4>
                  <ul class="menu">
                    <li>Build</li>
                    <li>Design</li>
                    <li>DevOps</li>
                    <li>Security</li>
                    <li>Testing</li>
                  </ul>
                </nav>
              </div>
              <div class="col-lg-4 col-md-6 about-column">
                <nav>
                  <h4><a href="#">About</a></h4>
                  <ul class="menu">
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Clients</a></li>
                  </ul>
                  <ul class="menu">
                    <li><a href="#">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col">
            Copyright &copy; 2015-{{ date("Y") }} Platinum Tech Solutions Limited.
            <a href="#">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112067714-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-112067714-1');
    </script>

    @yield('javascripts')

  </body>
</html>
