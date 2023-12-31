<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ url('img/hh.jpg') }}" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 customListMenu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">หน้าหลัก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            โรคในผู้สูงอายุ
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/obesity">โรคอ้วน</a></li>
                            <li><a class="dropdown-item" href="/diabetes2">โรคเบาหวาน</a></li>
                            <li><a class="dropdown-item" href="/blood_pressure3">โรคความดันโลหิตสูง</a></li>
                            <li><a class="dropdown-item" href="/High_blood_fat">โรคไขมันในเลือดสูง</a></li>
                            <li><a class="dropdown-item" href="/Osteoarthritis">โรคข้อเสื่อม</a></li>
                            <li><a class="dropdown-item" href="#">โรคหัวใจขาดเลือด</a></li>
                            <li><a class="dropdown-item" href="#">โรคสมองเสื่อม</a></li>
                            <li><a class="dropdown-item" href="#">โรคซึมเศร้า</a></li>
                            <li><a class="dropdown-item" href="#">อาการวิตกกังวลและนอนไม่หลับ</a></li>
                            <li><a class="dropdown-item" href="#">โรคเกี่ยวกับทางเดินอาหาร</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true" href="/calculator">แคลอรี่</a>
                    </li>
                </ul>
                <form class="d-flex customInputForm" role="search">
                    <input class="form-control me-2 customInput" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <a href="https://lin.ee/vzKDpan"><i class="fa-brands fa-line customLoginBT me-3"></i></a>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="me-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mg-r6">
                                <i class="fa-regular fa-circle-user customLoginBT "></i>
                            </a>

                            {{-- @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <script src="https://kit.fontawesome.com/73c417b541.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
