<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>lost Items</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th:first-child,
        td:first-child {
            text-align: center;
        }
        th:last-child,
        td:last-child {
            text-align: center;
        }
        td:last-child button {
            background-color: #8a0505;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            font-size: 16px; /* Adjust font size */
            border-radius: 5px; /* Round corners */
            transition: background-color 0.3s; /* Smooth color transition */
        }
        .bg{
            background-image: url('image/login-bg.png');
            height: 100vh;
            background-position: center center;
            background-size: cover;

        }
        .bg-2{
            background-color: #cbcbcbd0
        }
        td:last-child button:hover {
            background-color: #6b0303;
        }
        /* Style for search filter */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
        }
        input[type="text"],
        button[type="submit"],
        button[type="button"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth color transition */
        }
        input[type="text"] {
            width: 300px;
            margin-right: 10px;
        }
        button[type="submit"],
        button[type="button"] {
            cursor: pointer;
            font-weight: bold; /* Make text bold */
            color: #000000; /* Text color */
        }
        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #861212;

        }
        .btn-ahmed{
            border: 1px solid black;
            padding: 10px 20px;
        }
        .ahmed-edit{
            right: 20px;
            top: 40%;
            right: 50%;
        }
    </style>
</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg best  w-100">
        <div class="container-fluid">
          <a class="navbar-brand text-white font-main " href="#">NMU Security Gate</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link me-5 pe-5 text-white " href="{{ url('admin.Deposit') }}"><i class="fa-solid fa-lock me-2"></i>Deposited Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5 pe-5 text-white" href="{{ url('admin.car') }}"><i class="fa-solid fa-car me-2"></i>Entered Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5 pe-5 text-white" href="{{ url('admin.lost-and-found') }}"><i class="fa-solid fa-magnifying-glass me-2"></i>
                  Lost things</a>
              </li>
            </ul>
            <button class="btn btn-outline-dark border-0" >  <a href="/login" class="sign-out-btn nav-link  text-decoration-none text-white   ">Sign Out <i class="fa-solid fa-right-from-bracket"></i> </a>
            </button>
          </div>
        </div>
      </nav>
    
      <h1 class="fw-bold text-center mt-5 pt-5  text-white">lost Items</h1>

    <div class="search-container">
        <!-- Search form -->
        <form action="{{ route('submission.search_lost_and_found') }}" method="GET">
            <input type="text" name="query" placeholder="Search by ID or Name">
            <button type="submit">Search</button>
        </form>
        <!-- Back button -->
        <button type="button" onclick="window.location.href='{{ route('submission.search_lost_and_found') }}'">Back</button>
    </div>

    <table class="w-75 mx-auto" border="5">
        <thead class="bg-2">
            <tr>
                <th>#</th> <!-- Add row number column -->
                <th>photo</th>
                <th>Name</th>
                <th>found</th>
                <th>Delete</th> <!-- Add column for delete buttons -->
            </tr>
        </thead>
        <tbody class="bg-2">
            @php $row_number = 1; @endphp <!-- Initialize row number -->
            @foreach ($submissions as $submission)
            <tr>
                <td>{{ $row_number++ }}</td> <!-- Increment row number -->
                <td>{{ $submission->photo }}</td>
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->found }}</td>
                <td>
                    <!-- Delete form -->
                    <form action="{{ route('submission.destroy_lost_and_found', $submission->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>