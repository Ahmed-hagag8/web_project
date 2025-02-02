<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="shortcut icon" href="{{ asset('image/LOGO22.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
  <nav class="navbar navbar-expand-lg best position-fixed w-100">
    <div class="container-fluid">
      <a class="navbar-brand text-white font-main " href="/">NMU Security Gate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mx-3 text-white  active" href="{{ url('/') }}"> <i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white " href="{{ url('Deposit') }}"><i class="fa-solid fa-lock"></i> Deposit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white" href="{{ url('cars') }}"><i class="fa-solid fa-car"></i> Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white" href="{{ url('lost-and-found') }}"><i class="fa-solid fa-magnifying-glass"></i>
              Lost & Found</a>
          </li>
        </ul>
        <button class="click mx-3" type="submit">
          <a href="{{ url('login') }}"><i class="fa-solid fa-circle-user"></i> Login</a>
        </button>
        <button class="click mx-3" type="submit">
          <a href="{{ url('register') }}"><i class="fa-solid fa-user-plus"></i> Register</a>
        </button>
      </div>
    </div>
  </nav>

  <div class="container-fluid image">
    <div class="caption d-flex justify-content-center align-items-center flex-column">
      <h1 class="font-main">NMU security gate</h1>
      <h2 class="mt-3"><span id="can-do" class="font-main"></span></h2>
    </div>
  </div>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    var typed = new Typed("#can-do", {
      strings: ["Deposit-room", "Cars", "Lost &amp; Found"],
      typeSpeed: 80,
      loop: true,
    });
  </script>



  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>