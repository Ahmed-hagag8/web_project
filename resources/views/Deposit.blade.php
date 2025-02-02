<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NMU Room of Deposits</title>
    <link rel="shortcut icon" href="{{ asset('image/LOGO22.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Deposit.css') }}" />
  </head>

  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg best position-absolute top-0">
        <div class="container-fluid">
          <a
            class="navbar-brand text-white lang mx-3 ms-5"
            href="{{ url('Deposit_arabic') }}"
            ><i class="fa-solid fa-earth-americas"></i>AR</a
          >
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
                <a class="nav-link mx-3 text-white  active" href="{{ url('Deposit') }}"><i class="fa-solid fa-lock"></i> Deposit</a>
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
              <a href="login"
                ><i class="fa-solid fa-circle-user"></i> login</a
              >
            </button>
            <button class="click mx-3" type="submit">
              <a href="register"
                ><i class="fa-solid fa-user-plus"></i> register</a
              >
            </button>
          </div>
        </div>
      </nav>

      <!-- Content -->

      <h2 class="mt-5 font-main"><b>Deposit Form</b></h2>
      <form id="registrationForm" class="mt-4" action="{{ route('/form') }}"  method="post"  enctype="multipart/form-data">
        @csrf
        <label for="name"><i class="fa-solid fa-user"></i> Name:</label>
        <input
          type="text"
          id="name"
          name="name"
          pattern="[A-Za-z ]+"
          placeholder="Please enter your name only letters"
          required
        />

        <label for="faculty">
          <i class="fa-solid fa-building-columns"></i> Faculty:</label
        >
        <select id="faculty" name="faculty" required>
          <option value="" disabled selected>Select your faculty</option>
          <option value="Computer Science & Engineering">
            Computer Science & Engineering
          </option>
          <option value="Engineering">Engineering</option>
          <option value="Science">Science</option>
          <option value="International Legal Transactions">
            International Legal Transactions
          </option>
          <option value="Textile Science & Engineering ">
            Textile Science & Engineering
          </option>
          <option value="Dentistry">Dentistry</option>
          <option value="Doctor Of Pharmacy (PharmD) ">
            Doctor Of Pharmacy (PharmD)
          </option>
          <option value="Business">Business</option>
          <option value="Medicine & Surgery">Medicine & Surgery</option>
        </select>

        <label for="studentId"
          ><i class="fa-solid fa-id-card"></i> Student ID:</label
        >
        <input
          type="text"
          id="studentId"
          name="studentId"
          pattern="\d{9}"
          placeholder="Please enter 9 numbers"
          required
        />

        <label for="phoneNumber"
          ><i class="fa-solid fa-phone"></i> Phone Number:</label
        >
        <input
          type="text"
          id="phoneNumber"
          name="phoneNumber"
          pattern="\d{11}"
          placeholder="Please enter 11 numbers"
          required
        />

        <label for="picture"
          ><i class="fa-regular fa-image"></i> Deposited Item:</label
        >
        <input
          type="file"
          id="depositedItem"
          name="depositedItem"
          accept="image/*"
          required
        />

        <input type="submit" value="Submit" />
      </form>



    <script src="./js/bootstrap.bundle.min.js"></script>
    {{-- <script src="./js/Deposit.js"></script> --}}
  </body>
</html>
