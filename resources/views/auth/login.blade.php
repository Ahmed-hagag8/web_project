<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('image/LOGO22.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> <!-- Add this line -->
        <title>login</title>
        
    </head>
    
<body>
    
    <div class="login-container">
        <div class="login-box">
            <h1 class="fw-bolder">Login</h1>
            

            <form  action="/submit" method="POST">
                @csrf <!-- Laravel CSRF protection -->
                <div class="login__content">
                    <div class="login__box">
                        <label for="userType" class="text-white fw-bold me-2 my-2 ">Login as:</label>
                        <select id="userType" onchange="toggleSections()" name="role">
                            <option value="0" >Student</option>
                            <option value="1" >Admin</option>
                        </select>
                    </div>

                <div class="form-group my-2">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group my-2">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group my-2">
                    <button type="submit">Login</button>
                </div>
            </form>
            <p class="login__register">
                Don't have an account? <a href="{{ url('register') }}">Register</a>
            </p>

        </div>
    </div>



    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="./js/login.js"></script> --}}
</body>
</html>
