<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/styles.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/swiper.min.css'>

    @yield('css')
    <title>صفحه اصلی</title>
</head>

<body>


<main class="d-flex gap-4">

    <!-- sidebar -->
    <aside
        class="w-260 w-lg-100 bottom-lg-0 fs-sm-13 d-flex d-lg-block gap-4 justify-content-between h-lg-80 p-sm-4 p-md-3 p-1 font-bold shadow bg-primary position-fixed h-100vh overflow-y-lg-visible overflow-y-auto z-10">
        <a class="d-flex align-items-center gap-2 text-warning p-md-2 rounded-2 py-3 mt-3 dashboard"
           style="background-color: #0842987B">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi flex-shrink-0 d-none d-sm-block bi-speedometer2" viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd"
                      d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
            </svg>
            <p class="mb-0">داشبورد</p>

        </a>
        <a href="" class="d-flex align-items-center gap-2 text-warning p-md-2  p-2 rounded-2 mt-3 my_details"
           style="background-color: rgba(8,66,152,0.48)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi flex-shrink-0 d-none d-sm-block bi-clipboard-data" viewBox="0 0 16 16">
                <path
                    d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                <path
                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                <path
                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
            </svg>
            <p class="mb-0">اطلاعات من</p>
        </a>
        <a href="" class="d-flex align-items-center gap-2 text-warning p-md-2 mt-3 p-2 rounded-2 search_sidebar"
           style="background-color: #0842987B ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi flex-shrink-0 d-none d-sm-block bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            <p class="mb-0">جستجو</p>
        </a>
        <a href=""
           class="d-flex align-items-center gap-2 text-warning p-md-2 mt-3 p-2 rounded-2 message_sidebar"
           style="background-color: #0842987B ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi flex-shrink-0 d-none d-sm-block bi-chat-dots" viewBox="0 0 16 16">
                <path
                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                <path
                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
            </svg>
            <p class="mb-0">پیام ها</p>
        </a>
    </aside>

    <!-- content -->
    <section class="pb-5 flex-grow-1 mr-280 mr-lg-0">
        <div class="container mt-5 mb-5 mb-lg-0">
            <div class="d-flex align-items-center gap-4">
                {{-- welcome message            --}}
                <div class="nav-item dropdown">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="nav-link text-warning font-bold" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            خوش آمدی {{\Illuminate\Support\Facades\Auth::user()->user_name}}
                        </a>
                    @else
                        <a class=" text-white  font-bold" href="{{route('login')}}" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            ورود به حساب کاربری
                        </a>
                    @endif
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('logout')}}">خروج از حساب کاربری</a></li>
                    </ul>
                </div>
                <div class="position-relative d-block dropdownHover">
            <span
                class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                         class="bi bi-chat-dots text-warning cursor" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                    </svg>
                    <div class="position-absolute top-26 dropdownContent z-10">
                        <div class="bg-white w-223 rounded-3 p-2 mt-3 px-4">
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                            </a>
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                            </a>
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">یک پیام جدید از طرف رضا دارید</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="position-relative d-block dropdownHover">
                    <a class="gifts">
                        <span
                            class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                             class="bi bi-gift-fill cursor text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z"/>
                        </svg>


                    </a>

                    <div class="position-absolute top-26 dropdownContent z-10">
                        <div class="bg-white w-223 rounded-3 p-2 mt-3 px-4">
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                            </a>
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                            </a>
                            <a class="d-flex align-items-center gap-2 text-dark fs-12 font-bold py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone text-danger flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                                </svg>
                                <p class="mb-0">تبریک... یک جایزه جدید از طرف رضا دارید</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="position-relative d-block dropdownHover">
            <span
                class="bg-danger cursor text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center m-3 fs-14 w-16 h-16">3</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                         class="bi bi-bell-fill cursor text-warning" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
                    </svg>
                    <div class="position-absolute top-26 dropdownContent z-10">
                        <div class="bg-white w-223 rounded-3 p-2 mt-3 h-245 overflow-y-auto">
                            <div class="text-dark fs-12 font-bold py-2 border-bottom">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd"
                                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd"
                                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd"
                                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
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


            <div id="page_section">

                @yield('content')
            </div>


        </div>
    </section>

</main>


<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom/index.js"></script>

@yield('js')
</body>

</html>
