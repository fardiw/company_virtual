<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/swiper.min.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/styles.css'>
  <title>پیام ها</title>
</head>

<body>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h1 class="modal-title fs-5 font-bold text-white" id="exampleModalLabel">واریز پول</h1>
                <svg data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  fill="currentColor" class="bi bi-x-square-fill cursor text-danger me-auto ms-0" viewBox="0 0 16 16">
                  <path
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708" />
                </svg>
              </div>
              <div class="modal-body border-0">
                <div class="d-flex align-items-center gap-3">
                 <label class="font-bold text-white">مبلغ</label>
                 <input class="form-control border-warning bg-transparent text-white" placeholder="مبلغ را وارد کنید">
                </div>
                <div class="d-flex align-items-center justify-content-center flex-wrap gap-3 mt-4">
                  <p class="font-bold text-warning mb-0">موجودی قابل انتقال:</p>
                  <p class="text-warning mb-0">30,000,000 تومان</p>
                </div>
              </div>
              <div class="modal-footer border-0 gap-3 d-flex align-items-center justify-content-center">
                <button data-bs-dismiss="modal" type="button" class="btn btn-warning w-100 text-white font-bold">واریز</button>
              </div>
            </div>
          </div>
        </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header border-0">
                  <h1 class="modal-title fs-5 font-bold text-white" id="exampleModalLabel">واریز xp</h1>
                  <svg data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" class="bi bi-x-square-fill cursor text-danger me-auto ms-0" viewBox="0 0 16 16">
                    <path
                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708" />
                  </svg>
                </div>
                <div class="modal-body border-0">
                  <div class="d-flex align-items-center gap-3">
                   <label class="font-bold text-white">مبلغ</label>
                   <input class="form-control border-warning bg-transparent text-white" placeholder="مبلغ را وارد کنید">
                  </div>
                  <div class="d-flex align-items-center justify-content-center flex-wrap gap-3 mt-4">
                    <p class="font-bold text-warning mb-0">موجودی قابل انتقال:</p>
                    <p class="text-warning mb-0">30,000,000 تومان</p>
                  </div>
                </div>
                <div class="modal-footer border-0 gap-3 d-flex align-items-center justify-content-center">
                  <button data-bs-dismiss="modal" type="button" class="btn btn-warning w-100 text-white font-bold">واریز</button>
                </div>
              </div>
            </div>
          </div>

  <!-- main -->

  <main class="d-flex gap-4">

    <!-- sidebar -->
     <aside class="w-260 w-lg-100 bottom-lg-0 fs-sm-12 d-flex d-lg-block gap-4 justify-content-between h-lg-80 p-sm-4 p-3 font-bold shadow bg-primary position-fixed h-100vh overflow-y-lg-visible overflow-y-auto z-10">
       <a class="d-flex align-items-center gap-2 text-warning py-3 border-bottom border-warning border-lg-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi flex-shrink-0 bi-speedometer2" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
        </svg>
        <p class="mb-0">داشبورد</p>
       </a>
       <a class="d-flex align-items-center gap-2 text-warning py-3 border-bottom border-warning border-lg-0">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi flex-shrink-0 bi-search" viewBox="0 0 16 16">
           <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>
          <p class="mb-0">جستجو</p>
        </a>
        <a class="d-flex align-items-center gap-2 text-warning py-3 border-bottom border-warning border-lg-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi flex-shrink-0 bi-chat-dots" viewBox="0 0 16 16">
            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
          </svg>
          <p class="mb-0">پیام ها</p>
        </a>
        <a class="d-flex align-items-center gap-2 text-warning py-3 border-bottom border-warning border-lg-0">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi flex-shrink-0 bi-clipboard-data" viewBox="0 0 16 16">
           <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
           <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
           <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
         </svg>
         <p class="mb-0">اطلاعات من</p>
        </a>
     </aside>

     <!-- content -->
    <section class="pb-5 flex-grow-1 mr-280 mr-lg-0 h-100vh">
      <div class="container my-5 mb-lg-0 pb-5 pb-lg-0">
        <div class="pb-5 mb-5 mb-lg-0 pb-lg-0">
          <div class="d-flex align-items-center gap-4">
            <div class="nav-item dropdown">
              <a class="nav-link text-warning font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                خوش آمدی فردین
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">خروج از حساب کاربری</a></li>
              </ul>
            </div>
            <div class="position-relative d-block dropdownHover">
              <span
                class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                class="bi bi-chat-dots text-warning cursor" viewBox="0 0 16 16">
                <path
                  d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                <path
                  d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
              </svg>
              <div class="position-absolute top-26 dropdownContent z-10">
                <div class="bg-white w-223 rounded-3 p-2 mt-3 px-4">
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                  </a>
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                  </a>
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="position-relative d-block dropdownHover">
              <span
                class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                class="bi bi-gift-fill cursor text-warning" viewBox="0 0 16 16">
                <path
                  d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z" />
              </svg>
              <div class="position-absolute top-26 dropdownContent z-10">
                <div class="bg-white w-223 rounded-3 p-2 mt-3 px-4">
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                  </a>
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                  </a>
                  <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                      <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                    </svg>
                    <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="position-relative d-block dropdownHover">
              <span
                class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-bell-fill cursor text-warning" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
              </svg>
              <div class="position-absolute top-26 dropdownContent z-10">
                <div class="bg-white w-223 rounded-3 p-2 mt-3 h-245 overflow-y-auto">
                  <div class="text-dark fs-12 font-bold py-2 border-bottom">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                      <p class="font-bold mb-0 h6">حسن</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                      <p class="mb-0">حسن درخواست پول کرد</p>
                      <a class="btn btn-success flex-shrink-0 fs-12">واریز</a>
                    </div>
                  </div>
                  <div class="text-dark fs-12 font-bold py-2 border-bottom">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                      <p class="font-bold mb-0 h6">حسن</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                      <p class="mb-0">حسن درخواست پول کرد</p>
                      <a class="btn btn-success flex-shrink-0 fs-12">واریز</a>
                    </div>
                  </div>
                  <div class="text-dark fs-12 font-bold py-2 border-bottom">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                      <p class="font-bold mb-0 h6">حسن</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                      <p class="mb-0">حسن درخواست پول کرد</p>
                      <a class="btn btn-success flex-shrink-0 fs-12">واریز</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 row g-4 mx-3 h-76vh">
            <div class="position-fixed end-0 start-0 bottom-80 w-100 py-4 border-bottom border-warning bg-primary z-10 d-md-none">
             <div class="swiper messagesswiper">
              <div class="swiper-wrapper">
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                  </svg>
                   <p class="font-bold mb-0 fs-14 fs-sm-13 text-white">لیلا صادقی</p>
                 </div>
               </div>
              </div>
             </div>
            </div>
            <div class="col-md-4 d-md-block d-none rounded-3 px-3 h-76vh overflow-y-auto hidden-scroll">
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="mb-2">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-flex justify-content-between align-items-end gap-3">
                  <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                     </svg>
                      <p class="font-bold mb-0 fs-14">لیلا صادقی</p>
                    </div>
                  </div>
                 </div>
              </div>
            </div>
            <div class="col-md-8 bg-white rounded-3 pt-3 px-0 h-76vh overflow-y-auto position-relative hidden-scroll">
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست پول کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal4" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست xp کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal5" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست پول کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal4" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست xp کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal5" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست پول کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal4" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <div class="mb-4 px-3">
                <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 px-4 d-inline-flex justify-content-between align-items-end gap-3">
                 <div class="flex-grow-1">
                   <div class="d-flex align-items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle flex-shrink-0 text-primary" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                    </svg>
                     <p class="font-bold mb-0 fs-14">لیلا صادقی درخواست xp کرد</p>
                   </div>
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal5" class="btn btn-danger flex-shrink-0 fs-12">پذیرش درخواست</a>
                    <p class="mb-0 font-bold text-success fs-12">1 ساعت پیش</p>
                  </div>
                 </div>
                </div>
              </div>
              <form class="border position-sticky bottom-0 rounded-3 p-2 px-3 mx-auto h-70 shadow mx-auto bg-white d-flex align-items-center gap-2">
                <button class="d-flex align-items-center justify-content-center d-block border-0 flex-shrink-0 rounded-circle bg-info w-44 h-44">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 29 29" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5698 14.0708C26.5698 20.5477 21.3193 25.7983 14.8423 25.7983C8.36542 25.7983 3.11484 20.5477 3.11484 14.0708C3.11484 7.59384 8.36542 2.34326 14.8423 2.34326C21.3193 2.34326 26.5698 7.59384 26.5698 14.0708ZM15.2626 11.001C14.1219 11.4755 11.8422 12.4575 8.42336 13.947C7.8682 14.1677 7.57738 14.3837 7.55091 14.5949C7.50616 14.9518 7.9531 15.0923 8.56172 15.2837C8.64451 15.3097 8.73029 15.3367 8.81823 15.3653C9.41701 15.5599 10.2225 15.7877 10.6412 15.7967C11.021 15.8049 11.445 15.6483 11.913 15.3269C15.1073 13.1707 16.7562 12.0808 16.8597 12.0573C16.9328 12.0407 17.034 12.0199 17.1026 12.0809C17.1711 12.1418 17.1644 12.2572 17.1571 12.2882C17.1128 12.4769 15.3584 14.108 14.4505 14.9521C14.1675 15.2152 13.9667 15.4019 13.9257 15.4445C13.8337 15.54 13.74 15.6303 13.65 15.7171C13.0937 16.2534 12.6765 16.6555 13.6731 17.3122C14.152 17.6278 14.5352 17.8888 14.9175 18.1491C15.335 18.4335 15.7515 18.7171 16.2903 19.0703C16.4276 19.1603 16.5587 19.2537 16.6863 19.3448C17.1722 19.6912 17.6088 20.0024 18.1481 19.9527C18.4615 19.9239 18.7852 19.6292 18.9495 18.7504C19.3381 16.6734 20.1017 12.1733 20.2782 10.3189C20.2937 10.1565 20.2742 9.94852 20.2586 9.85725C20.243 9.76597 20.2103 9.63593 20.0917 9.53965C19.9512 9.42564 19.7343 9.4016 19.6373 9.40331C19.1962 9.41108 18.5194 9.64639 15.2626 11.001Z" fill="white"></path>
                  </svg>
                </button>
                <div class="h-70 w-44 position-relative d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                    <path d="M16.375 11.739L8.68198 19.432C6.92462 21.1893 4.07538 21.1893 2.31802 19.432C0.56066 17.6746 0.56066 14.8254 2.31802 13.068L13.2573 2.12868C14.4289 0.957107 16.3283 0.957107 17.4999 2.12868C18.6715 3.30025 18.6715 5.19975 17.4999 6.37132L6.55158 17.3197M6.56066 17.3107C6.55764 17.3137 6.55462 17.3167 6.55158 17.3197M12.2498 7.37865L4.43934 15.1893C3.85355 15.7751 3.85355 16.7249 4.43934 17.3107C5.02211 17.8934 5.9651 17.8964 6.55158 17.3197" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                  <input type="file" class="position-absolute cursor top-0 bottom-0 end-0 start-0 w-100 h-100 opacity-0 z-10">
                </div>
                <input placeholder="چیزی بنویسید..." class="outline-none border-0 w-100 flex-grow-1 h-100">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
