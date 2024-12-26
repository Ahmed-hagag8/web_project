<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMU Room of Deposits arabic</title>
    <link rel="shortcut icon" href="{{ asset('image/LOGO22.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Deposit.css') }}" />
</head>

<body>
    <div class="container-fluid">
      
      <nav class="navbar navbar-expand-lg best position-absolute top-0">
        <div class="container-fluid">
          <a class="navbar-brand text-white lang mx-3   ms-5" href="Deposit"><i class="fa-solid fa-earth-americas"></i>En</a>
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
              <a class="nav-link mx-3 text-white " href="{{ url('/') }}"> <i class="fa-solid fa-house"></i> الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 text-white active" href="{{ url('Deposit') }}"
                ><i class="fa-solid fa-lock"></i> الامانات</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 text-white" href="{{ url('cars') }}"><i class="fa-solid fa-car"></i> السيارات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 text-white" href="{{ url('lost-and-found') }}"
                ><i class="fa-solid fa-magnifying-glass"></i> المفقودات</a
              >
            </li>
          </ul>
          <button class="click mx-3" type="submit">
            <a href="login"><i class="fa-solid fa-circle-user"></i> تسجيل الدخول</a>
          </button>
          <button class="click mx-3" type="submit">
            <a href="register"><i class="fa-solid fa-user-plus"></i> حساب جديد</a>
          </button>
        </div>
      </div>
    </nav>
  

    <h2 class="mt-5">نموذج الإيداع</h2>
    <form id="registrationForm" enctype="multipart/form-data"  action="{{ route('/form') }}"  method="post"  enctype="multipart/form-data">
      @csrf  
      <label for="name">:أسم الطالب <i class="fa-solid fa-user"></i></label>
        <input type="text" id="name" name="name" pattern="[A-Za-z ]+" placeholder="الاسم" required>

        <label for="faculty">:كلية <i class="fa-solid fa-building-columns"></i></label>
        <select id="faculty" name="faculty" required>
            <option value="" disabled selected>اختر كليتك</option>
            <option value="Computer Science & Engineering">هندسة الحاسوب والبرمجيات</option>
            <option value="Engineering">الهندسة</option>
            <option value="Science">العلوم</option>
            <option value="International Legal Transactions">المعاملات القانونية الدولية</option>
            <option value="Textile Science & Engineering ">علوم وهندسة النسيج</option>
            <option value="Dentistry">طب الأسنان</option>
            <option value="Doctor Of Pharmacy (PharmD) ">دكتور في الصيدلة (الصيدلة السريرية)</option>
            <option value="Business">إدارة الأعمال</option>
            <option value="Medicine & Surgery">الطب والجراحة</option>            
        </select>

        <label for="studentId">:هوية الطالب <i class="fa-solid fa-id-card"></i></label>
        <input type="text" id="studentId" name="studentId" pattern="\d{9}" placeholder="ارقام فقط" required>

        <label for="phoneNumber">:رقم التليفون <i class="fa-solid fa-phone"></i></label>
        <input type="text" id="phoneNumber" name="phoneNumber" pattern="\d{11}" placeholder="الهاتف"
            required>

        <label for="picture">:العنصر المخزن <i class="fa-regular fa-image"></i></label>
        <input type="file" id="picture" name="depositedItem" accept="image/png, image/jpeg, image/jpg" required>

        <input type="submit" value="Submit">
    </form>

    
   

    
    <script src="./js/bootstrap.bundle.min.js"></script>
{{-- <script src="./js/Deposit.js"></script> --}}



</body>

</html>
