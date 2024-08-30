<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{Vite::asset('resources/assets/images/favicon.png')}}">
    @vite(['resources/sass/app.scss', 'resources/js/admin.js'])

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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
        <img src="{{Vite::asset($user->profileImage??'resources/assets/images/favicon.png')}}" alt="Profile" class="rounded-circle">
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6>{{$user->name}}</h6>
            <span>{{$user->isAdmin=1?'Admin':'SuperAdmin'}}</span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
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
    <a class="nav-link " href="{{route('admin.dashboard')}}">
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
        <a href="{{route('admin.products.list')}}">
            <i class='bx bx-closet'></i><span>Products</span>
        </a>
        </li>
        <li>
        <a href="{{route('admin.customers.list')}}">
            <i class='bx bx-male-female'></i><span>Customers</span>
        </a>
        </li>

        <li>
        <a href="{{route('admin.category.list')}}">
            <i class='bx bx-category-alt'></i><span>Categories</span>
        </a>
        </li>
    </ul>
    </li><!-- End Components Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">@yield('maintitle')</li>
            <li class="breadcrumb-item active">@yield('pagetitle')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="modal fade" id="addproduct" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add new product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bolder my-2" for="p_name">{{__('Product Name')}}</label>
                                    <input type="text" id="p_name" name="name" required autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bolder my-2">Select Category</label>
                                  <select class="form-select" required name="category">
                                    <option selected disabled>{{__('Open to select Category')}}</option>
                                    @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->category}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bolder my-2" for="p_price">{{__('Product Price')}}</label>
                                    <input id="p_price" type="number" min="0" name="price" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bolder my-2" for="o_price">{{__('Retail Price')}}</label>
                                    <input id="o_price" type="number" min="0" name="retail_price" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bolder my-2" for="p_img">{{__('Images')}}</label>
                                    <input type="file" id="p_img" name="img[]" multiple required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="fw-bolder my-2" for="p_desc">{{__('Description')}}</label>
                                    <div id="editor-area"></div>
                                    <textarea hidden name="description" id="quill-area"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var quill = new Quill('#editor-area', {
                        theme: 'snow'
                    });
            
                    var quillEditor = document.getElementById('quill-area');
                    quillEditor.value = quill.root.innerHTML;
                    quill.on('text-change', function() {
                            quillEditor.value = quill.root.innerHTML;
                    });
                    quillEditor.addEventListener('input', function() {
                        quillEditor.value = quill.root.innerHTML;
                    });
                });
            </script>
        </div>
        </div>
    </div><!-- End addproduct Modal-->
    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class='bx bxs-x-circle me-1'></i>
            {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class='bx bx-check-circle me-1'></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @yield('content')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
</main>
</body>
</html>
