<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Credits</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('favicon.png')}}" rel="icon">
  <link href="{{asset('img/welcome/favicon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}"><img src="{{asset('img/welcome/logo2.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Simulador</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#contact">Contacto</a></li> --}}
          {{-- <li><a class="getstarted scrollto" href="#">Iniciar Sesión</a></li>
          <li><a class="getstarted1 scrollto" href="#">Registrarse</a></li> --}}
          @if (Route::has('login'))
            @auth
              <li><a class="getstarted scrollto" href="{{ url('/home') }}">Home</a></li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{-- <img src="{{ asset(Auth::user()->photo) }}" class="img-thumbnail rounded-circle" width="40px"> --}}
                    {{ Auth::user()->fullname }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    {{-- @if (Auth::user()->role == "Admin")
                        <a class="dropdown-item" href="{{ url('users') }}">
                            <i class="fa fa-users"></i>
                            Módulo Usuarios 
                        </a>
                        <a class="dropdown-item" href="{{ url('categories') }}">
                            <i class="fas fa-list-alt"></i>
                            Módulo Categorías 
                        </a>
                        <a class="dropdown-item" href="{{ url('games') }}">
                            <i class="fas fa-gamepad"></i>
                            Módulo Juegos 
                        </a>
                        <div class="dropdown-divider"></div>
                    @elseif(Auth::user()->role == "Editor")
                        <a class="dropdown-item" href="{{ url('editor/info') }}">
                                <i class="fa fa-user"></i>
                                Mis Datos 
                        </a>
                        <a class="dropdown-item" href="{{ url('editor/games') }}">
                            <i class="fas fa-gamepad"></i>
                            Mis Juegos 
                        </a>
                    @endif --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> 
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
            @else
              @guest
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Iniciar Sesión</a></li>
                {{-- @if (Route::has('register'))
                  <li><a class="getstarted1 scrollto" href="{{ route('register') }}">Registrarse</a></li>
                @endif --}}                
              @endguest
            @endif
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Credits</h1>
          <h2>La plataforma que estabas buscando, acá te prestamos fácil y rápido</h2>
          <div>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Iniciar sesión</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/welcome/hero-img.svg') }}"class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  {{-- <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{asset('img/welcome/about-img.svg')}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Credits</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Somos una plataforma de creditos online, donde podrás, simular, solicitar y gestionar tus créditos de forma fácil y rápida.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class='bx bx-money'></i>
                <h4>Créditos</h4>
                <p>Solicita un prestamo fácil y rápido, sin deudores o intermediarios</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-lock"></i>
                <h4>Seguridad</h4>
                <p>Realiza la solicitud en linea de forma segura o contacta a nuestros asesores</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    {{-- <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Simulador</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex" data-aos="fade-up" data-aos-delay="200">
            <form class="simulador">
              <div class="row">
                <div class="form-group container py-4 text-center col-md-9">
                  <label for="mount-sumulator">Escriba el monto que desea solicitar: </label>
                  <input type="text" name="mount-sumulator" class="form-control mt-2" id="mount-sumulator" placeholder="" required data-type='currency'>
                </div>
              </div>
              <div class="text-center col-md-12"><a class="btn btn-outline-dark btn-block" id="calcularSimulacion">Calcular</a></div>
              <div id="resultado" class="my-4 container col-md-6">
                <!-- <ul class="list-group list-group-flush">
                  <li class="list-group-item"><i class="bx bx-chevron-right"></i><b>Cuota 1: </b>   $100.000</li>
                  <li class="list-group-item"><i class="bx bx-chevron-right"></i><b>Cuota 2: </b>   $100.000</li>
                  <li class="list-group-item"><i class="bx bx-chevron-right"></i><b>Cuota 3: </b>   $100.000</li>
                  <li class="list-group-item"><i class="bx bx-chevron-right"></i><b>Cuota 4: </b>   $100.000</li>
                  <li class="list-group-item"><i class="bx bx-chevron-right"></i><b>Cuota 5: </b>   $100.000</li>
                </ul> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Services Section --> --}}


    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Us Section ======= -->
    {{-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Contacto</p>
        </div>

        <div class="row">


          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nombre Completo</label>
                  <input type="text" name="name" class="form-control" id="name"  required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Correo Electrónico</label>
                  <input type="email" class="form-control" name="email" id="email"  required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Mensaje enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main --> --}} 

  <!-- ======= Footer ======= -->
  {{-- <footer id="footer">

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Halley System S.A.S - 2022</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://halley-system.com/">www.halley-system.com</a>
      </div>
    </div>
  </footer><!-- End Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js') }}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js') }}"></script>

</body>

</html>