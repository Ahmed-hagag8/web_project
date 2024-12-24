<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('image/LOGO22.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lost-and-found.css') }}" />
    <title>Losting</title>
  </head>
  <body >
    <nav class="navbar navbar-expand-lg best position-absolute w-100 top-0">
      <div class="container-fluid">
        <a class="navbar-brand text-white lang mx-3   ms-5" href="lost-and-found-arabic"><i class="fa-solid fa-earth-americas"></i>AR</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mx-3 text-white" href="{{ url('/') }}"> <i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white" href="{{ url('Deposit') }}"><i class="fa-solid fa-lock"></i> Deposit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white" href="{{ url('cars') }}"><i class="fa-solid fa-car"></i> Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-white  active" href="{{ url('lost-and-found') }}"><i class="fa-solid fa-magnifying-glass"></i>
              Lost & Found</a>
          </li>
        </ul>
        <button class="click mx-3" type="submit">
          <a href="login"><i class="fa-solid fa-circle-user"></i> login</a>
        </button>
        <button class="click mx-3" type="submit">
          <a href="register"><i class="fa-solid fa-user-plus"></i> register</a>
        </button>
      </div>
    </div>
  </nav>

    <main>
      <section>
        <form class="form-control my-bg" action="{{ route('/form3') }}" method="POST">
          @csrf
        <div class="text-center mt-5 pt-5 ">
          <h1 class=" fw-bold text-center font-main" >Lost item</h1>
        </div>

        <div class="container py-4">
          <div class="row align-items-start">
            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold text-white font-main" for="photo"><i class="fa-regular fa-image"></i> Lost item:</label>
              <input
                type="file"
                id="photo"
                name="photo"
                class="form-control"
                accept="image/*"
                required
              />
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold text-white font-main" for="name"><i class="fa-solid fa-user"></i> Name:</label>
              <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                placeholder="Enter Name"
                required
              />
            </div>

            <div class="col-12 mb-3">
              <label class="form-label fw-bold text-white font-main" for="comment"
                >found At <i class="fa-solid fa-comment"></i>:</label
              >
              <textarea
                name="found"
                id="found"
                class="form-control mt-2"
                cols="30"
                rows="5"
                placeholder="found At"
              ></textarea>
            </div>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" id="submitBtn" class="btn btn-me btn-lg">
            Submit
          </button>
          {{-- <button
            id="updateBtn"
            onclick="confirmUpdate()"
            class="btn btn-me btn-lg d-none"
          >
            Update
          </button> --}}
        </div>

        {{-- <div class="container">
          <div class="row py-5" id="content"></div>
        </div> --}}
      </form>
      </section>
    </main>

    {{-- <script src="./js/lost-and-found.js"></script> --}}
    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>
