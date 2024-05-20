<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{Vite::asset('resources/assets/images/favicon.png')}}">
    @vite(['resources/sass/app.scss', 'resources/js/admin.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <i class='bx bx-menu toggle-sidebar-btn'></i>
</div>

<div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class='bx bx-search'></i></button>
    </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class='bx bx-search'></i>
        </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class='bx bx-bell' ></i>
        <span class="badge bg-primary badge-number">4</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
            <h4>Jackton</h4>
            <p>Some messages here</p>
            <p>30 min. ago</p>
            </div>
        </li>

        </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class='bx bx-message-alt' ></i>
        <span class="badge bg-success badge-number">3</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="message-item">
            <a href="#">
            <img src="{{Vite::asset('resources/assets/images/favicon.png')}}" alt="" class="rounded-circle">
            <div>
                <h4>Maria Hudson</h4>
                <p>some message from client</p>
                <p>4 hrs. ago</p>
            </div>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="message-item">
            <a href="#">
            <img src="{{Vite::asset('resources/assets/images/favicon.png')}}" alt="" class="rounded-circle">
            <div>
                <h4>Anna Nelson</h4>
                <p>Notification from client here</p>
                <p>6 hrs. ago</p>
            </div>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="{{Vite::asset('resources/assets/images/favicon.png')}}" alt="Profile" class="rounded-circle">
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6>Francis Otieno</h6>
            <span>Developer</span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" 
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out-circle'></i>
            <span>Sign Out</span>
            </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        </li>

        </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
    <a class="nav-link " href="">
        <i class='bx bxs-home'></i>
        <span>Dashboard</span>
    </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class='bx bxs-shopping-bags' ></i><span>Ecommerce</span><i class='bx bxs-chevron-down' ></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
        <a href="">
            <i class='bx bx-closet'></i><span>Products</span>
        </a>
        </li>
        <li>
        <a href="">
            <i class='bx bx-male-female'></i><span>Customers</span>
        </a>
        </li>
    </ul>
    </li><!-- End Components Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    @yield('content')
</main>
</body>
</html>