<!doctype html>
<html lang="zxx">

<!-- Mirrored from baston.laborasyon.com/demos/default/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:56:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Komunitas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('../../templete2/assets/media/image/favicon.png')}}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('../../templete2/vendors/bundle.css')}}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">


<!-- App css -->
    <link rel="stylesheet" href="{{ asset('../../templete2/assets/css/app.min.css')}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="chat-app small-navigation">
<!-- Preloader -->
<div class="preloader">
    <!-- <img class="logo" src="{{ asset('../../templete2/assets/media/image/logo/logo.png')}}" alt="logo"> -->
    <!-- <img class="dark-logo" src="{{ asset('../../templete2/assets/media/image/logo/dark-logo.png')}}" alt="logo dark"> -->
    <h1>Website Komunitas</h1>
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="chat.html" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Dani</h6>
                            <span class="text-muted">Halo Apa Kabarmu?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="../../templete2/assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Halo Apa Kabarmu?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/man_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Halo Apa Kabarmu?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <form class="d-flex">
                                <button class="btn">
                                    <i class="ti-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="Search" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                Hi! <strong>Yusuf Islam</strong>
                            </span>
                            <figure gure class="avatar avatar-sm">
                                <img src="../../templete2/assets/media/image/user/man_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4"
                                 data-background-image="../../assets/media/image/image1.jpg">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="../../templete2/assets/media/image/user/man_avatar3.jpg"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">Yusuf Islam</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="{{ route('profile') }}" class="list-group-item">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item text-danger">Sign Out!</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href=index-2.html>
                    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
                    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="dark logo">
                    <img class="small-logo" src="{{ asset('../../templete2/assets/media/image/logo/small-logo.png')}}" alt="small logo">
                    <img class="small-dark-logo" src="../../assets/media/image/logo/small-dark-logo.png" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i class="ti-close"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#apps">
                                <span class="menu-tab-icon">
                                    <i data-feather="globe"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">Dashboards</li>
                        <li>
                            <a  href="ecommerce-dashboard.html">
                                <span class="nav-link-icon" data-feather="shopping-cart"></span>
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li>
                            <a  href="analytics-dashboard.html">
                                <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                                <span>Analytics</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a  href="helpdesk-dashboard.html">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>Helpdesk</span>
                            </a>
                        </li>
                        <li class="navigation-divider">E-commerce Pages</li>
                        <li>
                            <a  href="orders.html">
                                <span class="nav-link-icon" data-feather="box"></span>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-list.html">
                                <span class="nav-link-icon" data-feather="list"></span>
                                <span>Product List</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-grid.html">
                                <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Product Grid</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-detail.html">
                                <span class="nav-link-icon" data-feather="file-text"></span>
                                <span>Product Detail</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="apps">
                        <li class="navigation-divider">Apps</li>
                        <li>
                            <a  class="active"
                                href="chat.html">
                                <span class="nav-link-icon" data-feather="message-circle"></span>
                                <span>Chat</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="users"></span>
                                <span>Grup</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                    <div class="row no-gutters chat-block">
        <!-- Chat sidebar -->
        <div class="col-lg-4 chat-sidebar">

            <!-- Sidebar search -->
            <div class="chat-sidebar-header">
                <div class="d-flex">
                    <div class="pr-3">
                        <div class="avatar">
                            <img src="../../assets/media/image/user/man_avatar3.jpg" class="rounded-circle"
                                 alt="image">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Yusuf Islam</p>
                        <p class="m-0 small text-muted">Team Leader</p>
                    </div>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                <i class="width-18 height-18" data-toggle="tooltip" title="Settings"
                                   data-feather="settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="profile.html">Profile</a>
                                <a class="dropdown-item" href="user-edit.html">Edit</a>
                                <a class="dropdown-item" data-sidebar-target="#settings" href="#">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Chat search">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ./ Sidebar search -->

            <!-- Chat list -->
            <div class="chat-sidebar-content">
                <div class="chat-lists">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                <div class="avatar avatar-state-danger">
                                    <img src="../../templete2/assets/media/image/user/man_avatar2.jpg"
                                         class="rounded-circle"
                                         alt="image">
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Dani</h6>
                                <span class="text-muted">Halo Apa Kabarmu?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="badge badge-success badge-pill ml-auto mb-2">1</span>
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                <div class="avatar avatar-state-success">
                                    <img src="../../templete2/assets/media/image/user/women_avatar1.jpg"
                                         class="rounded-circle"
                                         alt="image">
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Frisca</h6>
                                <span class="text-muted">Hi!</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="badge badge-success badge-pill ml-auto mb-2">3</span>
                                <span class="small text-muted">08:27 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="../../templete2/assets/media/image/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Desi</h6>
                                <span class="text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                            <span class="avatar avatar-state-info">
                                                <img src="../../templete2/assets/media/image/user/man_avatar1.jpg"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Rahmat</h6>
                                <span class="text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-secondary">
                                            <span class="avatar-title bg-warning rounded-circle">D</span>
                                        </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Deru</h6>
                                <span class="text-muted">Halo Apa Kabarmu?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ./ Chat list -->

        </div>
        <!-- ./ Chat sidebar -->

        <!-- Chat content -->
        <div class="col-lg-8 chat-content no-chat-selected">
            <!-- Chat empty block -->
            <div class="chat-empty">
                <img src="http://baston.laborasyon.com/assets/media/svg/empty_chat.svg" alt="...">
                <p class="lead text-muted mt-3">Choose a chat</p>
                <button class="btn btn-primary">
                    <i class="ti-plus mr-2"></i> New Chat
                </button>
            </div>
            <!-- ./Chat empty block -->

            <!-- Chat header -->
            <div class="chat-header">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <div class="avatar avatar-state-warning">
                            <img src="../../templete2/assets/media/image/user/man_avatar1.jpg"
                                class="rounded-circle"
                            alt="image">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Dani</p>
                        <div class="m-0 small text-success">typing...</div>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav align-items-center">
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Video Call" data-toggle="tooltip">
                                    <i data-feather="video" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Voice Call" data-toggle="tooltip">
                                    <i data-feather="phone-call" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="d-sm-inline d-none">
                                <a href="#" title="Add to Contact" data-toggle="tooltip">
                                    <i data-feather="user-plus" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="ml-4 mobile-chat-close-btn">
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i data-feather="x" class="width-18 height-18"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./ Chat header -->

            <!-- Messages -->
            <div class="messages">
                <div class="message-item">
                    <div class="message-item-content">Hi!</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                    </div>
                    <span class="time small text-muted font-italic">Yesterday</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Hello! How are you today?</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content d-flex">
                        <i class="ti-file mr-2 font-size-20 mt-2"></i>
                        <div>
                            <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                            <ul class="list-inline small">
                                <li class="list-inline-item"><a href="#">Download</a></li>
                                <li class="list-inline-item"><a href="#">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me message-media">
                    <img src="../../assets/media/image/photo1.jpg" alt="image">
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item message-item-divider">
                    <span>Today</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
            </div>
            <!-- ./ Messages -->

            <!-- Chat footer -->
            <div class="chat-footer">
                <form class="d-flex">
                    <button class="btn btn-outline-light mr-2" type="button" title="Emoji"
                            data-toggle="tooltip">
                        <i data-feather="smile" class="width-15 height-15"></i>
                    </button>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" placeholder="Write your message">
                    </div>
                    <div class="chat-footer-buttons d-flex">
                        <button class="btn btn-primary" type="submit">
                            <i data-feather="send" class="width-15 height-15"></i>
                        </button>
                        <button class="btn btn-outline-light" type="button" title="Attach files"
                                data-toggle="tooltip">
                            <i data-feather="paperclip" class="width-15 height-15"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- ./ Chat footer -->
        </div>
        <!-- ./ Chat content -->
    </div>
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2020 Baston - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ asset('../../templete2/vendors/bundle.js')}}"></script>

    <!-- Chat app examples -->
    <script src="{{ asset('../../templete2/assets/js/examples/pages/chat.js')}}"></script>

<!-- App scripts -->
<script src="{{ asset('../../templete2/assets/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/default/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:56:06 GMT -->
</html>
