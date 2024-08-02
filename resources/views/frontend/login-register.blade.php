<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/styles.css'>
  <title>ورود / ثبت نام</title>
</head>

<body>


  <!-- main -->

  <main>

   <div class="container py-5">
     <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <ul class="nav nav-pills font-bold mb-3 p-0 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ورود</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ثبت نام</button>
          </li>
        </ul>

          @include('partials.error')

        <div class="tab-content mt-5" id="pills-tabContent">
          {{-- Login --}}
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <form action="{{route('login')}}" method="POST" class="max-w-460 mx-auto border border-warning p-4 rounded-3">
              @csrf()

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-warning"> ایمیل یا نام کاربری</label>
                <input name="email_or_username" type="text" class="form-control bg-transparent border border-warning" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-warning">رمز عبور</label>
                <input name="password" type="password" class="form-control bg-transparent border border-warning" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check cursor">
                <input name="remember_me" type="checkbox" class="form-check-input float-end" id="exampleCheck1">
                <label class="form-check-label me-4 text-warning" for="exampleCheck1">مرا به خاطر بسپار</label>
              </div>
              <button type="submit" class="btn btn-warning w-100">ورود</button>
            </form>
          </div>



          {{-- Sign Up --}}
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <form action="{{ route('sign_up') }}" method="POST" class="max-w-460 mx-auto border border-warning p-4 rounded-3">
              @csrf()
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-warning">نام کاربری</label>
                <input name="user_name" type="text" class="form-control bg-transparent border border-warning" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-warning">ایمیل</label>
                <input name="email" type="email" class="form-control bg-transparent border border-warning" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-warning">رمز عبور</label>
                <input name="password" type="password" class="form-control bg-transparent border border-warning" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-warning w-100">ثبت نام</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
       <img alt="img" src="assets/img/image4.png" class="img-fluid d-block mx-auto">
      </div>
     </div>
   </div>

  </main>


  <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
